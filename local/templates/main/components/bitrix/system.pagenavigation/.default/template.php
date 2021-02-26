<?
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

	if(!$arResult["NavShowAlways"])
	{
		if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
			return;
	}

	$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
	$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>


<div class="pagination">
	<div class="pagination-total">
		<?=$arResult["NavFirstRecordShow"]?> <?=GetMessage("nav_to")?> <?=$arResult["NavLastRecordShow"]?> <?=GetMessage("nav_of")?> <?=$arResult["NavRecordCount"]?>
	</div>
	<div class="pagination-list">
		<? if($arResult["bDescPageNumbering"] === true): ?>
			<? if($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
				<?if($arResult["bSavePage"]):?>
					<a class="pagination-button" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=GetMessage("nav_begin")?></a>
					<a class="pagination-button" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("nav_prev")?></a>
				<?else:?>
					<a class="pagination-button" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_begin")?></a>
					<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
						<a class="pagination-button" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_prev")?></a>
					<?else:?>
						<a class="pagination-button" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("nav_prev")?></a>
					<?endif?>
				<?endif?>
			<? else: ?>
				<?=GetMessage("nav_begin")?> <?=GetMessage("nav_prev")?>
			<? endif ?>

			<? while($arResult["nStartPage"] >= $arResult["nEndPage"]): ?>
				<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

				<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
					<b><?=$NavRecordGroupPrint?></b>
				<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
					<a class="pagination-button" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a>
				<?else:?>
					<a class="pagination-button" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a>
				<?endif?>

				<?$arResult["nStartPage"]--?>
			<?endwhile?>

			<? if($arResult["NavPageNomer"] > 1): ?>
				<a class="pagination-button" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("nav_next")?></a>
				<a class="pagination-button" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_end")?></a>
			<?else:?>
				<?=GetMessage("nav_next")?> <?=GetMessage("nav_end")?>
			<?endif?>
		<?else:?>
			<?if ($arResult["NavPageNomer"] > 1):?>
				<?if($arResult["bSavePage"]):?>
					<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1">
						<span class="pagination-button"><?=GetMessage("nav_begin")?></span>
					</a>
					<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
						<span class="pagination-button"><?=GetMessage("nav_prev")?></span>
					</a>
				<?else:?>
					<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
						<span class="pagination-button"><?=GetMessage("nav_begin")?></span>
					</a>
					<?if ($arResult["NavPageNomer"] > 2):?>
						<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
							<span class="pagination-button"><?=GetMessage("nav_prev")?></span>
						</a>
					<?else:?>
						<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
							<span class="pagination-button"><?=GetMessage("nav_prev")?></span>
						</a>
					<?endif?>
				<?endif?>
			<?endif?>

			<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>
				<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
					<span class="pagination-button pagination-button_selected"><?=$arResult["nStartPage"]?></span>
				<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
					<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryStringFull?>">
						<span class="pagination-button"><?=$arResult["nStartPage"]?></span>
					</a>
				<?else:?>
					<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>">
						<span class="pagination-button"><?=$arResult["nStartPage"]?></span>
					</a>
				<?endif?>
				<?$arResult["nStartPage"]++?>
			<?endwhile?>

			<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
					<span class="pagination-button"><?=GetMessage("nav_next")?></span>
				</a>
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>">
					<span class="pagination-button"><?=GetMessage("nav_end")?></span>
				</a>
			<?endif?>
		<?endif?>
	</div>

	<?if ($arResult["bShowAll"]):?>
		<noindex>
			<?if ($arResult["NavShowAll"]):?>
				<a class="pagination-button" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0" rel="nofollow"><?=GetMessage("nav_paged")?></a>
			<?else:?>
				<a class="pagination-button" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1" rel="nofollow"><?=GetMessage("nav_all")?></a>
			<?endif?>
		</noindex>
	<?endif?>

</div>