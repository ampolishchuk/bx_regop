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

<div class="services-detail">
	<p class="services-detail-text">
		<?=$arResult['DETAIL_TEXT']?>
	</p>
	<div class="services-detail-files">
		<h3>Файлы для скачивания</h3>
		<div class="services-detail-files-list">
			<? foreach($arResult['FILES'] as $index => $file) { ?>
				<div class="services-detail-file">
					<span class="services-detail-file-id"><?=$index + 1?></span>
					<? if(!empty($file['SRC'])) { ?>
						<a href="<?=$file['SRC']?>" title="<?=$file['NAME']?>" target="_blank" class="services-detail-file-link">
							<?=$file['NAME']?>
						</a>
					<? } else { ?>
						<span class="services-detail-file-empty"><?=$file['NAME']?> (файл отсутствует)</span>
					<? } ?>
				</div>
			<? } ?>
		</div>
	</div>
</div>