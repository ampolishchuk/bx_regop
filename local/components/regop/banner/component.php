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

$arResult['TITLE'] = $arParams["TITLE"];
$arResult['TEXT'] = $arParams["TEXT"];
$arResult['IMAGE'] = $arParams["IMAGE"];

$this->IncludeComponentTemplate();
?>