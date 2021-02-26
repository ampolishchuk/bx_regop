<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die() ?>

<div class="contacts contacts_header">
    <? if($arResult[0]['PHONES']) { ?>
        <div class="contacts-item">
            <img class="contacts-icon" src="<?=$componentPath."/images/001-phone-call.svg"?>">
            <span class="contacts-text"><?=$arResult[0]['PHONES'][0]?></span>
        </div>
    <? } ?>
    <? if($arResult[0]['ADDRESS']) { ?>
        <div class="contacts-item">
            <img class="contacts-icon" src="<?=$componentPath."/images/016-location.svg"?>">
            <span class="contacts-text"><?=$arResult[0]['ADDRESS']?></span>
        </div>
    <? } ?>
</div>