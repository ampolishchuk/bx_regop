<?
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<div class="faq">
	<div class="faq-list">
		<? foreach($arResult["ITEMS"] as $index => $arItem) { ?>
			<div class="faq-item">
				<div class="faq-title">
					<span class="faq-id"><?= $index + 1 ?></span>
					<h3 class="faq-question"><?= $arItem['NAME'] ?></h3>
					<img class="faq-icon" src="<?=$componentPath.'/images/arrow-down.svg'?>">
				</div>
				<div class="faq-answer">
					<?= $arItem['PREVIEW_TEXT'] ?>
				</div>
			</div>
		<? } ?>
	</div>
	<? if($arResult["SHOW_ALL"] != 'N') { ?>
		<a class="faq-showAll" href="/<?=explode('/', $arResult["LIST_PAGE_URL"])[1]?>">Посмотреть все</a>
	<? } ?>
</div>
		 
<script>
	$(document).ready(function() {	
		$(".faq-list").children().each((index, item) => {
			const title = $(item).find('.faq-title');
			const icon = $(item).find('.faq-icon');
			const answer = $(item).find('.faq-answer');

			answer.slideUp();

			title.on('click', () => {
				answer.slideToggle();
				icon.toggleClass('rotated')
			})
		})
	});
</script>