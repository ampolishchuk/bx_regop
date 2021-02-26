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

$sectionID = htmlspecialchars($_GET['SECTION_ID']);

if($sectionID) {
    $arParams["SECTION_ID"] = $sectionID;

    $secList = CIBlockSection ::GetList(
        Array("SORT"=>"ASC"),
        Array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE"=>"Y")
    );

    while($section = $secList->Fetch()) {
        $res = CIBlockSection::GetByID($sectionID)->GetNext();
    
        $APPLICATION->SetTitle($res["NAME"]);
    }
}

$elements = [];

if($arParams["ELEMENT_ID"] == 'ALL') {
    $elList = CIBlockElement::GetList(
        Array("SORT"=>"ASC"),
        Array("IBLOCK_SECTION_ID" => $arParams["SECTION_ID"], "ACTIVE"=>"Y")
    );
    
    while($element = $elList->Fetch()) {
        array_push($elements, $element["ID"]);
    }
} else {
    array_push($elements, $arParams["ELEMENT_ID"]);
}

foreach ($elements as $key => $id) {
    $element = GetIBlockElement($id);
    $props = $element['PROPERTIES'];
    $values = array(
        'NAME' => $element["NAME"],
        'CONTACT_NAME' => $props["NAME"]["VALUE"],
        'PHONES' => $props["PHONE"]["VALUE"],
        'ADDRESS' => $props["ADDRESS"]["VALUE"],
        'EMAIL' => $props["EMAIL"]["VALUE"],
        'WORK' => $props["WORK"]["VALUE"],
        'DESCRIPTION' => $props["DESCRIPTION"]["VALUE"],
    );
    
    array_push($arResult, $values);
}

$this->IncludeComponentTemplate();
?>