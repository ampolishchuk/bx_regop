<?
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

	$this->addExternalJS($componentPath."/js/map.js");
?>

<div class="districts-list districts-list_header">
	<div class="districts-list-map">
		<? include($_SERVER['DOCUMENT_ROOT'].$componentPath.'/images/map.svg') ?>
	</div>
	<div class="districts-list-items">
		<? foreach($arResult["ITEMS"] as $index => $arItem) { ?>
			<a class="districts-list-item" data-map="<?=$arItem['MAP_PATH']?>" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
				<?= $arItem["NAME"] ?>
			</a>
		<? } ?>
	</div>
</div>