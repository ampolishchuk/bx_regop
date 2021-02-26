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

$arResult = GetIBlockElement($arParams["ELEMENT_ID"]);


$this->IncludeComponentTemplate();
?>