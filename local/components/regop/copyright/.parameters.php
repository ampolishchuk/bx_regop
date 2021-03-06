<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
    return;
    
$iBlockTypes = CIBlockParameters::GetIBlockTypes();

$iBlocksList = CIBlock::GetList(
    Array("SORT" => "ASC"), 
    Array("TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE"=>"Y")
);
$iBlocks = [];
while($iBlock = $iBlocksList->Fetch()) {
    $iBlocks[$iBlock["ID"]] = "[".$iBlock["ID"]."] ".$iBlock["NAME"];
}


$elList = CIBlockElement::GetList(
    Array("SORT"=>"ASC"),
    Array("IBLOCK_ID" => $arCurrentValues["IBLOCK_ID"], "ACTIVE"=>"Y")
);
$elements = [];
while($element = $elList->Fetch()) {
    $elements[$element["ID"]] = "[".$element["ID"]."] ".$element["NAME"];
}

$arComponentParameters = array(

    "PARAMETERS" => array(
        "IBLOCK_TYPE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage('IBLOCK_TYPE'),
			"TYPE" => "LIST",
			"VALUES" => $iBlockTypes,
            "MULTIPLE" => "N",
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage('IBLOCK_ID'),
			"TYPE" => "LIST",
			"VALUES" => $iBlocks,
            "MULTIPLE" => "N",
			"REFRESH" => "Y",
			"ADDITIONAL_VALUES" => "Y",
        ),
        "ELEMENT_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage('ELEMENT_ID'),
			"TYPE" => "LIST",
			"VALUES" => $elements,
            "MULTIPLE" => "N",
			"REFRESH" => "N",
			"ADDITIONAL_VALUES" => "Y",
		),
    ),
);
?>