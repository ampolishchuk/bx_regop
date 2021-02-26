<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die() ?>

<div class="files">
    <h3 class="files-title"><?=$arResult['TITLE']?></h3>
    <div class="files-list">
        <? foreach($arResult['FILES'] as $index => $file) { ?>
            <div class="files-item">
                <span class="files-id"><?=$index + 1?></span>
                <? if(!empty($file['SRC'])) { ?>
                    <a href="<?=$file['SRC']?>" title="<?=$file['NAME']?>" target="_blank" class="files-link">
                        <?=$file['NAME']?>
                    </a>
                <? } else { ?>
                    <span class="files-empty"><?=$file['NAME']?> (файл отсутствует)</span>
                <? } ?>
            </div>
        <? } ?>
    </div>
</div>
