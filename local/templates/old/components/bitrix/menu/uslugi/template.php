<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="row">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<div class="col-sm-12"><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></div>
	<?else:?>
		<div class="col-sm-12"><a href="<?=$arItem["LINK"]?>" class="uslugi-item"><?=$arItem["TEXT"]?></a></div>
	<?endif?>
	
<?endforeach?>

</div>
<?endif?>