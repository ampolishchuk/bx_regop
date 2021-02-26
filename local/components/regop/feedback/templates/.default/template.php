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

<div class="feedback">
	<p class="feedback-description">Пожалуйста, заполните форму ниже и наши специалисты свяжутся с Вами в ближайшее время.</p>

	<?
		if(!empty($arResult["ERROR_MESSAGE"]))
		{
			foreach($arResult["ERROR_MESSAGE"] as $v)
				ShowError($v);
		}
		if(strlen($arResult["OK_MESSAGE"]) > 0)
		{
			?><div class="feedback-complete"><?=$arResult["OK_MESSAGE"]?></div><?
		}
	?>

	<form class="feedback-form" action="<?=POST_FORM_ACTION_URI?>" method="POST">
		<?=bitrix_sessid_post()?>
		<div class="feedback-group">
			<div class="feedback-field">
				<div class="feedback-text">
					Имя: <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="feedback-req">*</span><?endif?>
				</div>
				<input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
			</div>	
			<div class="feedback-field">
				<div class="feedback-text">
					Населенный пункт: <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("CITY", $arParams["REQUIRED_FIELDS"])):?><span class="feedback-req">*</span><?endif?>
				</div>
				<input type="text" name="user_city" value="<?=$arResult["AUTHOR_CITY"]?>">
			</div>
			<div class="feedback-field">
				<div class="feedback-text">
					Электронная почта: <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="feedback-req">*</span><?endif?>
				</div>
				<input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
			</div>
			<div class="feedback-field">
				<div class="feedback-text">
					Сообщение: <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="feedback-req">*</span><?endif?>
				</div>
				<textarea name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
			</div>
		</div>

		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
			<div class="feedback-group">
				<h4 class="feedback-text">Введите проверочный код</h4>
				<div class="feedback-captcha">
					<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
					<div class="feedback-field">
						<div class="feedback-text">
							Проверочный код: <span class="feedback-req">*</span>
						</div>
						<input type="text" name="captcha_word" size="30" maxlength="50" value="">
					</div>
				</div>
			</div>
		<?endif;?>
		
		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
		<input class="feedback-button" type="submit" name="submit" value="Отправить">
	</form>
</div>