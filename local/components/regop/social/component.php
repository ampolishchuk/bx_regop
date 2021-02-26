<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

 if(!CModule::IncludeModule("iblock"))
    return;

$elList = CIBlockElement::GetList(
    Array("SORT"=>"ASC"),
    Array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE"=>"Y")
);

while($element = $elList->Fetch()) {
    $props = GetIBlockElement($element["ID"])["PROPERTIES"];
    $icon = CFile::GetFileArray($props["icon"]["VALUE"]);

    $arResult[$element["ID"]] =  array(
        "LINK" => $props["link"]["VALUE"],
        "ICON" => $icon['SRC'],
        "DESCRIPTION" => $props["description"]["VALUE"],
    );
}

$this->IncludeComponentTemplate();
?>