<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<? if (!empty($arResult)) { ?>
	<nav class="menu menu_footer">
		<?
			foreach($arResult as $arItem) {
				if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;
				?>
					<a class="menu-link" href="<?=$arItem["LINK"]?>" class="<?= $arItem['SELECTED'] ? "selected" : "" ?>" ><?=$arItem["TEXT"]?></a>						
				<? 
			} 
		?>		
	</nav>
<? } ?>