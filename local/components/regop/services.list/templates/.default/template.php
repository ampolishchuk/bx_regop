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

<div class="services-list">
	<? foreach($arResult['ITEMS'] as $service) { ?>
		<a href="<?=$service['DETAIL_PAGE_URL']?>" class="services-item" style="background-image:url(<?=(!empty($_SERVER['HTTPS'])?'https':'http').'://'.$_SERVER['HTTP_HOST'].$component->GetPath().'/images/background.png'?>">
			<img src="<?=$service['ICON']?>" class="services-item-icon">
			<span class="services-item-link"><?=$service['NAME']?></span>
		</a>
	<? } ?>
</div>