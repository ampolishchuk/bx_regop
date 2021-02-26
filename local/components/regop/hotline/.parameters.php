<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
    "PARAMETERS" => array(
        "TEXT" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage('TEXT'),
			"TYPE" => "STRING",
            "MULTIPLE" => "N",
        ),
        "PHONE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage('PHONE'),
			"TYPE" => "STRING",
            "MULTIPLE" => "N",
		),
    ),
);
?>