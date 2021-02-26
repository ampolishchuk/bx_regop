<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>




 <? if($dir !='/') { ?>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="contacts">
					<h2>ООО «Региональный оператор Севера»</h2>
					<p>
						<strong>Адрес</strong> <br>
						169300, Республика Коми,<br>
						 г. Ухта, ул. Гоголя, д. 35 «В».
					</p>
					<p>
 <strong>Телефон:</strong> 8-800-350-39-62 / 8 (8216) 78-65-15⁠<br>
 <strong>Email:</strong> <a href="mailto:mail@regop-komi.ru">mail@regop-komi.ru</a>
					</p>
					<p>
 <strong>Режим работы:</strong><br>
						 ПН-ЧТ: 8:00-16:30
					</p>
					
				</div>
			</div>
			<div class="col-md-2 text-center">
 <br>
				<br>
				<img src="/local/templates/main/images/Licenziya-UGFregop.jpg" style="margin-bottom:8px" width="90%"> <br>
				<a href="/dokumenty/regop-ugf-partner-card.pdf" class="btn btn-default">Карта партнера</a>
			</div>
		</div>
		<div class="footer-menu">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"footer",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => ".default",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => "",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>
		</div>
		<p class="text-center">
			 © ООО «Региональный оператор Севера» — официальный сайт, 2019
		</p>
	</div>
</div>
<? } ?>
<script>

	$(document).ready(function() {
		$('.hide-overlay').click(function() {
			$('.overlay').css('width', '0');
		});
			$('.show-overlay').click(function() {
			$('.overlay').css('width', '100%');
		});
		})
	</script>