<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
$arFilter = Array("TYPE_ID" => "FEEDBACK_FORM", "ACTIVE" => "Y");
if($site !== false)
	$arFilter["LID"] = $site;

$arEvent = Array();
$dbType = CEventMessage::GetList($by="ID", $order="DESC", $arFilter);
while($arType = $dbType->GetNext())
	$arEvent[$arType["ID"]] = "[".$arType["ID"]."] ".$arType["SUBJECT"];

$arComponentParameters = array(
	"PARAMETERS" => array(
		"USE_CAPTCHA" => Array(
			"NAME" => GetMessage("MFP_CAPTCHA"), 
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y", 
			"PARENT" => "BASE",
		),
		"OK_TEXT" => Array(
			"NAME" => GetMessage("MFP_OK_MESSAGE"), 
			"TYPE" => "STRING",
			"DEFAULT" => GetMessage("MFP_OK_TEXT"), 
			"PARENT" => "BASE",
		),
		"EMAIL_TO" => Array(
			"NAME" => GetMessage("MFP_EMAIL_TO"), 
			"TYPE" => "STRING",
			"DEFAULT" => htmlspecialcharsbx(COption::GetOptionString("main", "email_from")), 
			"PARENT" => "BASE",
		),
		"REQUIRED_FIELDS" => Array(
			"NAME" => GetMessage("MFP_REQUIRED_FIELDS"), 
			"TYPE"=>"LIST", 
			"MULTIPLE"=>"Y", 
			"VALUES" => Array(
				"NONE" => GetMessage("MFP_ALL_REQ"), 
				"ORGANIZATION" => GetMessage("MFT_ORGANIZATION"), 
				"EMAIL" => GetMessage("MFT_EMAIL"),
				"CONTACT_NAME" => GetMessage("MFT_CONTACT_NAME"),
				"PHONE" => GetMessage("MFT_PHONE"),
				"ACTIVITY" => GetMessage("MFT_ACTIVITY"),
				"LEGAL_ADDRESS" => GetMessage("MFT_LEGAL_ADDRESS"),
				"ACTUAL_ADDRESS" => GetMessage("MFT_ACTUAL_ADDRESS"),
				"POST_ADDRESS" => GetMessage("MFT_POST_ADDRESS"),
				"INN" => GetMessage("MFT_INN"),
				"KPP" => GetMessage("MFT_KPP"),
				"ADDRESSES" => GetMessage("MFT_ADDRESSES"),
				"AREA" => GetMessage("MFT_AREA"),
				"WASTE" => GetMessage("MFT_WASTE"),
				"CONTAINERS_ADDRESS" => GetMessage("MFT_CONTAINERS_ADDRESS"),
				"CONTAINERS_AMOUNT" => GetMessage("MFT_CONTAINERS_AMOUNT"),
				"CONTAINERS_AREA" => GetMessage("MFT_CONTAINERS_AREA"),
			),
			"DEFAULT"=>"", 
			"COLS"=>25, 
			"PARENT" => "BASE",
		),
		"EVENT_MESSAGE_ID" => Array(
			"NAME" => GetMessage("MFP_EMAIL_TEMPLATES"), 
			"TYPE"=>"LIST", 
			"VALUES" => $arEvent,
			"DEFAULT"=>"", 
			"MULTIPLE"=>"Y", 
			"COLS"=>25, 
			"PARENT" => "BASE",
		),

	)
);


?>