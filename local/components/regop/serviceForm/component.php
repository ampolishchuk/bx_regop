<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

$arResult["PARAMS_HASH"] = md5(serialize($arParams).$this->GetTemplateName());

$arParams["USE_CAPTCHA"] = (($arParams["USE_CAPTCHA"] != "N" && !$USER->IsAuthorized()) ? "Y" : "N");

$arParams["EVENT_NAME"] = trim($arParams["EVENT_NAME"]);
if($arParams["EVENT_NAME"] == '')
	$arParams["EVENT_NAME"] = "FEEDBACK_FORM";
$arParams["EMAIL_TO"] = trim($arParams["EMAIL_TO"]);
if($arParams["EMAIL_TO"] == '')
	$arParams["EMAIL_TO"] = COption::GetOptionString("main", "email_from");
$arParams["OK_TEXT"] = trim($arParams["OK_TEXT"]);
if($arParams["OK_TEXT"] == '')
	$arParams["OK_TEXT"] = GetMessage("MF_OK_MESSAGE");

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] <> '' && (!isset($_POST["PARAMS_HASH"]) || $arResult["PARAMS_HASH"] === $_POST["PARAMS_HASH"]))
{
	$arResult["ERROR_MESSAGE"] = array();
	$arResult["AUTHOR_ORGANIZATION"] = htmlspecialcharsbx($_POST['user_organization']);
	$arResult["AUTHOR_EMAIL"] = htmlspecialcharsbx($_POST["user_email"]);
	$arResult["AUTHOR_CONTACT_NAME"] = htmlspecialcharsbx($_POST["user_contactName"]);
	$arResult["AUTHOR_PHONE"] = htmlspecialcharsbx($_POST["user_phone"]);
	$arResult["AUTHOR_ACTIVITY"] = htmlspecialcharsbx($_POST["user_activity"]);
	$arResult["AUTHOR_LEGAL_ADDRESS"] = htmlspecialcharsbx($_POST["user_legalAddress"]);
	$arResult["AUTHOR_ACTUAL_ADDRESS"] = htmlspecialcharsbx($_POST["user_actualAddress"]);
	$arResult["AUTHOR_POST_ADDRESS"] = htmlspecialcharsbx($_POST["user_postAddress"]);
	$arResult["AUTHOR_INN"] = htmlspecialcharsbx($_POST["user_inn"]);
	$arResult["AUTHOR_KPP"] = htmlspecialcharsbx($_POST["user_kpp"]);
	$arResult["AUTHOR_ADDRESSES"] = htmlspecialcharsbx($_POST["user_addresses"]);
	$arResult["AUTHOR_AREA"] = htmlspecialcharsbx($_POST["user_area"]);
	$arResult["AUTHOR_WASTE"] = htmlspecialcharsbx($_POST["user_waste"]);
	$arResult["AUTHOR_CONTAINERS_ADDRESS"] = htmlspecialcharsbx($_POST["user_containersAddresses"]);
	$arResult["AUTHOR_CONTAINERS_AMOUNT"] = htmlspecialcharsbx($_POST["user_containersAmount"]);
	$arResult["AUTHOR_CONTAINERS_AREA"] = htmlspecialcharsbx($_POST["user_containersArea"]);

	if(check_bitrix_sessid())
	{
		if(empty($arParams["REQUIRED_FIELDS"]) || !in_array("NONE", $arParams["REQUIRED_FIELDS"]))
		{
			if((empty($arParams["REQUIRED_FIELDS"]) || in_array("ORGANIZATION", $arParams["REQUIRED_FIELDS"])) && strlen($arResult["AUTHOR_ORGANIZATION"]) <= 0)
				$arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_ORGANIZATION");	
			if((empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])) && strlen($arResult["AUTHOR_EMAIL"]) <= 0)
				$arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_EMAIL");
			if((empty($arParams["REQUIRED_FIELDS"]) || in_array("CONTACT_NAME", $arParams["REQUIRED_FIELDS"])) && strlen($arResult["AUTHOR_CONTACT_NAME"]) <= 0)
				$arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_CONTACT_NAME");		
			if((empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])) && strlen($arResult["AUTHOR_PHONE"]) <= 0)
				$arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_PHONE");	

		}

		if(strlen($arResult["AUTHOR_EMAIL"]) > 1 && !check_email($arResult["AUTHOR_EMAIL"]))
			$arResult["ERROR_MESSAGE"][] = GetMessage("MF_EMAIL_NOT_VALID");

		if($arParams["USE_CAPTCHA"] == "Y")
		{
			$captcha_code = $_POST["captcha_sid"];
			$captcha_word = $_POST["captcha_word"];
			$cpt = new CCaptcha();
			$captchaPass = COption::GetOptionString("main", "captcha_password", "");

			if (strlen($captcha_word) > 0 && strlen($captcha_code) > 0)
			{
				if (!$cpt->CheckCodeCrypt($captcha_word, $captcha_code, $captchaPass))
					$arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTCHA_WRONG");
			}
			else
				$arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTHCA_EMPTY");
		}		

		if(empty($arResult["ERROR_MESSAGE"]))
		{
			$arFields = Array(
				"AUTHOR_ORGANIZATION" => $arResult["AUTHOR_ORGANIZATION"],
				"AUTHOR_EMAIL" => $arResult["AUTHOR_EMAIL"],
				"AUTHOR_CONTACT_NAME" => $arResult["AUTHOR_CONTACT_NAME"],
				"AUTHOR_PHONE" => $arResult["AUTHOR_PHONE"],
				"AUTHOR_ACTIVITY" => $arResult["AUTHOR_ACTIVITY"],
				"AUTHOR_LEGAL_ADDRESS" => $arResult["AUTHOR_LEGAL_ADDRESS"],
				"AUTHOR_ACTUAL_ADDRESS" => $arResult["AUTHOR_ACTUAL_ADDRESS"],
				"AUTHOR_POST_ADDRESS" => $arResult["AUTHOR_POST_ADDRESS"],
				"AUTHOR_INN" => $arResult["AUTHOR_INN"],
				"AUTHOR_KPP" => $arResult["AUTHOR_KPP"],
				"AUTHOR_ADDRESSES" => $arResult["AUTHOR_ADDRESSES"],
				"AUTHOR_AREA" => $arResult["AUTHOR_AREA"],
				"AUTHOR_WASTE" => $arResult["AUTHOR_WASTE"],
				"AUTHOR_CONTAINERS_ADDRESS" => $arResult["AUTHOR_CONTAINERS_ADDRESS"],
				"AUTHOR_CONTAINERS_AMOUNT" => $arResult["AUTHOR_CONTAINERS_AMOUNT"],
				"AUTHOR_CONTAINERS_AREA" => $arResult["AUTHOR_CONTAINERS_AREA"],
				"EMAIL_TO" => $arParams["EMAIL_TO"],
			);

			if(!empty($arParams["EVENT_MESSAGE_ID"]))
			{
				foreach($arParams["EVENT_MESSAGE_ID"] as $v)
					if(IntVal($v) > 0)
						CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", IntVal($v));
			}
			else
				CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields);

			LocalRedirect($APPLICATION->GetCurPageParam("success=".$arResult["PARAMS_HASH"], Array("success")));
		}
	}
	else
		$arResult["ERROR_MESSAGE"][] = GetMessage("MF_SESS_EXP");
}
elseif($_REQUEST["success"] == $arResult["PARAMS_HASH"])
{
	$arResult["OK_MESSAGE"] = $arParams["OK_TEXT"];
}

if($arParams["USE_CAPTCHA"] == "Y")
	$arResult["capCode"] =  htmlspecialcharsbx($APPLICATION->CaptchaGetCode());

$this->IncludeComponentTemplate();
