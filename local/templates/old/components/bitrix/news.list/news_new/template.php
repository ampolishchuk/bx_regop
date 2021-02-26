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







<?foreach($arResult["ITEMS"] as $arItem) {?>
          <div class="vopros-wrap"> 
  <div class="row">        
<div class="col-md-3" style="width:100%;"><img src="<? echo $arItem["PREVIEW_PICTURE"]["SRC"] ?>" style="width:250px;">
</div>

<div class="col-md-9" id="ht-<?=$arItem['ID']?>"><a href="#"><h4><?=$arItem['NAME']?></h4></a>
<div><?=$arItem['PREVIEW_TEXT']?></div><!----><?print_r($arResult)?>
</div>
       </div>  
       </div>
     








<? } ?>