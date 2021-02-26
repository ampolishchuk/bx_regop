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

$iBlock = GetIBlock($arParams["IBLOCK_ID"]);

$arResult["TITLE"] = $iBlock['NAME'];
$arResult["FILES"] = [];

while($element = $elList->Fetch()) {
    $props = GetIBlockElement($element["ID"])["PROPERTIES"];
    $files = $props['FILES']['VALUE'];

    if(empty($files)) {
        array_push($arResult["FILES"], array(
            "NAME" => $element["NAME"],
            "SRC" => '',
        ));
    } else {
        foreach($files as $file) {
            $src = CFile::GetFileArray($file);
    
            array_push($arResult["FILES"], array(
                "NAME" => $element["NAME"],
                "SRC" => $src['SRC'],
            ));
        }
    }
}

$this->IncludeComponentTemplate();
?>