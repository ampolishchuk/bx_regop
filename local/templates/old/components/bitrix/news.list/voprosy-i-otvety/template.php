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
          <div class="vopros-title" id="ht-<?=$arItem['ID']?>"><?=$arItem['NAME']?> <span><i class="fa fa-angle-down"></i></span></div>
          <div class="vopros-otvet" id="sht-<?=$arItem['ID']?>" style="display:none">
           <?=$arItem['PREVIEW_TEXT']?>
          </div>
        </div>
        <? } ?>
     
<script>
    $(document).ready(function() 
{
	
	
	
	$(".vopros-title").click(function(){
		var id = $(this).attr('id');
		var display  = $('#s'+id).css('display');
		if(display == 'none') {
		$('#s'+id).slideDown();
    $('#'+id+' i').removeClass('fa-angle-down');
    $('#'+id+' i').addClass('fa-angle-up');
		} else {
		
    $('#s'+id).slideUp();
    $('#'+id+' i').removeClass('fa-angle-up');
    $('#'+id+' i').addClass('fa-angle-down');
		}
		});
  	});
  </script>