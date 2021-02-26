<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die() ?>
<div class="hotline" style="background-image:url(<?=(!empty($_SERVER['HTTPS'])?'https':'http').'://'.$_SERVER['HTTP_HOST'].$component->GetPath().'/images/background.jpg'?>">
    <span class="hotline-text"><?=$arResult['TEXT']?></span>
    <span class="hotline-phone"><?=$arResult['PHONE']?></span>
</div>