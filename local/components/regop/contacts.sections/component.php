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

$elements = [];

$secList = CIBlockSection ::GetList(
    Array("SORT"=>"ASC"),
    Array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE"=>"Y")
);
while($section = $secList->Fetch()) {
	$res = CIBlockSection::GetByID($section["ID"])->GetNext();

	$arResult[$section["ID"]] = array(
		'NAME' => $res['NAME'],
		'URL' => $res['SECTION_PAGE_URL'],
	);
}


$this->IncludeComponentTemplate();
?>