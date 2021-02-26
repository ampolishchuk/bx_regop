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
        ),
    ),
);
?>