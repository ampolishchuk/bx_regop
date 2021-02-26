<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
    "PARAMETERS" => array(
        "IMAGE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage('IMAGE'),
			"TYPE" => "FILE",
            "MULTIPLE" => "N",
		),
    ),
);
?>