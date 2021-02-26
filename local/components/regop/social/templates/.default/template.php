<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die() ?>

<div class="socials">
    <? foreach($arResult as $social) { ?>
        <a href="<?=$social['LINK']?>" title="<?=$social['DESCRIPTION']?>" target="_blank" class="socials-item">
            <img class="socials-icon" src="<?= $social['ICON']?>">
        </a>
    <? } ?>
</div>
