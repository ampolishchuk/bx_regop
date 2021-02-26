<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
    "PARAMETERS" => array(
        "TITLE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage('TITLE'),
			"TYPE" => "STRING",
            "MULTIPLE" => "N",
		),
		"TEXT" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage('TEXT'),
			"TYPE" => "STRING",
            "MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "Y",
        ),
        "IMAGE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage('IMAGE'),
			"TYPE" => "FILE",
            "MULTIPLE" => "N",
		),
    ),
);
?>