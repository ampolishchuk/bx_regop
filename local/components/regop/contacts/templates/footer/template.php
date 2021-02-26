<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die() ?>

<? foreach($arResult as $contacts) { ?>
    <div class="contacts contacts_footer">
        <div class="contacts-item">
            <h3 class="contacts-item-title"><?=$contacts['NAME']?></h3>
            <div class="contacts-item-list">
            <? if($contacts['CONTACT_NAME']) { ?>
                    <p>
                        <strong>Контактное лицо:</strong>
                        <?=$contacts['CONTACT_NAME']?>
                    </p>
                <? } ?>
                <? if($contacts['ADDRESS']) { ?>
                    <p>
                        <strong>Адрес:</strong>
                        <?=$contacts['ADDRESS']?>
                    </p>
                <? } ?>
                <? if($contacts['PHONES']) { ?>
                    <p>
                        <strong>Телефон:</strong>
                        <?=implode(", ", $contacts['PHONES'])?>
                    </p>
                <? } ?>
                <? if($contacts['EMAIL']) { ?>
                    <p>
                        <strong>Email:</strong> 
                        <? foreach($contacts['EMAIL'] as $key => $email) { ?> 
                            <a href="mailto:<?=$email?>"><?=$email?></a><?= $key != (count($contacts['EMAIL']) - 1)?',':''?>
                        <? } ?>
                    </p>
                <? } ?>
                <? if($contacts['WORK']) { ?>
                    <p>
                        <strong>Режим работы:</strong>
                        <?=$contacts['WORK']?>
                    </p>
                <? } ?>
                <? if($contacts['DESCRIPTION']) { ?>
                    <p>
                        <strong>Описание:</strong>
                        <?=$contacts['DESCRIPTION']?>
                    </p>
                <? } ?>
            </div>
        </div>
    </div>
<? } ?>
