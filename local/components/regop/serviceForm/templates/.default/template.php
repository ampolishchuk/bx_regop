<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div class="serviceForm">
	<p class="serviceForm-description">Пожалуйста, заполните форму ниже и наши специалисты свяжутся с Вами в ближайшее время.</p>

	<?
		if(!empty($arResult["ERROR_MESSAGE"]))
		{
			foreach($arResult["ERROR_MESSAGE"] as $v)
				ShowError($v);
		}
		if(strlen($arResult["OK_MESSAGE"]) > 0)
		{
			?><div class="serviceForm-complete"><?=$arResult["OK_MESSAGE"]?></div><?
		}
	?>

	<form class="serviceForm-form" action="<?=POST_FORM_ACTION_URI?>" method="POST">
		<?=bitrix_sessid_post()?>
		<div class="serviceForm-group">
			<h3>Контактная инфорация:</h3>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_CONTACT_NAME")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("CONTACT_NAME", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<input type="text" name="user_contactName" value="<?=$arResult["AUTHOR_CONTACT_NAME"]?>">
			</div>	
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_PHONE")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<input type="text" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>">
			</div>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_EMAIL")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
			</div>
		</div>
		<div class="serviceForm-group">
			<h3>Информация об организации:</h3>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_ORGANIZATION")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("ORGANIZATION", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<input type="text" name="user_organization" value="<?=$arResult["AUTHOR_ORGANIZATION"]?>">
			</div>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_ACTIVITY")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("ACTIVITY", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<textarea name="user_activity" rows="3" cols="40"><?=$arResult["AUTHOR_ACTIVITY"]?></textarea>
			</div>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_LEGAL_ADDRESS")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("LEGAL_ADDRESS", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<textarea name="user_legalAddress" rows="3" cols="40"><?=$arResult["AUTHOR_LEGAL_ADDRESS"]?></textarea>
			</div>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_ACTUAL_ADDRESS")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("ACTUAL_ADDRESS", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<textarea name="user_actualAddress" rows="3" cols="40"><?=$arResult["AUTHOR_ACTUAL_ADDRESS"]?></textarea>
			</div>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_POST_ADDRESS")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("POST_ADDRESS", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<textarea name="user_postAddress" rows="3" cols="40"><?=$arResult["AUTHOR_POST_ADDRESS"]?></textarea>
			</div>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_INN")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("INN", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<input type="text" name="user_inn" value="<?=$arResult["AUTHOR_INN"]?>">
			</div>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_KPP")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("KPP", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<input type="text" name="user_kpp" value="<?=$arResult["AUTHOR_KPP"]?>">
			</div>
		</div>
		<div class="serviceForm-group">
			<h3>Дополнительная информация:</h3>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_ADDRESSES")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("ADDRESSES", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<textarea name="user_addresses" rows="3" cols="40"><?=$arResult["AUTHOR_ADDRESSES"]?></textarea>
			</div>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_AREA")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("AREA", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<input type="text" name="user_area" value="<?=$arResult["AUTHOR_AREA"]?>">
			</div>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_WASTE")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("WASTE", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<input type="text" name="user_waste" value="<?=$arResult["AUTHOR_WASTE"]?>">
			</div>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_CONTAINERS_ADDRESS")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("CONTAINERS_ADDRESS", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<textarea name="user_containersAddresses" rows="3" cols="40"><?=$arResult["AUTHOR_CONTAINERS_ADDRESS"]?></textarea>
			</div>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_CONTAINERS_AMOUNT")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("CONTAINERS_AMOUNT", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<input type="text" name="user_containersAmount" value="<?=$arResult["AUTHOR_CONTAINERS_AMOUNT"]?>">
			</div>
			<div class="serviceForm-field">
				<div class="serviceForm-text">
					<?=GetMessage("MFT_CONTAINERS_AREA")?>:<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("CONTAINERS_AREA", $arParams["REQUIRED_FIELDS"])):?><span class="serviceForm-req">*</span><?endif?>
				</div>
				<input type="text" name="user_containersArea" value="<?=$arResult["AUTHOR_CONTAINERS_AREA"]?>">
			</div>
		</div>

		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
			<div class="serviceForm-group">
				<h4 class="serviceForm-text">Введите проверочный код</h4>
				<div class="serviceForm-captcha">
					<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
					<div class="serviceForm-field">
						<div class="serviceForm-text">
							Проверочный код: <span class="serviceForm-req">*</span>
						</div>
						<input type="text" name="captcha_word" size="30" maxlength="50" value="">
					</div>
				</div>
			</div>
		<?endif;?>
		
		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
		<input class="serviceForm-button" type="submit" name="submit" value="Отправить">
	</form>
</div>