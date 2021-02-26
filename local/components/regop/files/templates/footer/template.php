<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die() ?>

<div class="files files_footer">
    <div class="files-list">
        <? foreach($arResult['FILES'] as $file) { ?>
            <div class="files-item">
                <? if(!empty($file['SRC'])) { ?>
                    <a href="<?=$file['SRC']?>" title="<?=$file['NAME']?>" target="_blank" class="files-link">
                        <?=$file['NAME']?>
                    </a>
                <? } else { ?>
                    <span class="files-empty"><?=$file['NAME']?></span>
                <? } ?>
            </div>
        <? } ?>
    </div>
</div>
