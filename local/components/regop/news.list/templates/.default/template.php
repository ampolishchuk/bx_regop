<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news">
	<div class="news-list">
		<? foreach($arResult["ITEMS"] as $arItem) { 
			?>
			<div class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
				<img class="news-photo" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">			
				<span class="news-date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
				<div class="news-content">
					<a class="news-show" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
						<h3 class="news-title"><?= $arItem["NAME"] ?></h3>
					</a>
					<p class="news-text"><?= $arItem["PREVIEW_TEXT"] ?></p>
				</div>
			</div>
		<? } ?>
	</div>
	<? if($arResult["SHOW_ALL"] != 'N') { ?>
		<a class="news-showAll" href="/<?=explode('/', $arResult["LIST_PAGE_URL"])[1]?>">Посмотреть все</a>
	<? } ?>
	<? if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
		<?=$arResult["NAV_STRING"]?>
	<? } ?>
</div>