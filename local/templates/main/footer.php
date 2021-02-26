<?
	if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
		die();
?>

		</main>
		<footer>	
			<div class="footer-wrap">
				<div class="footer-column">
					<?$APPLICATION->IncludeComponent(
	"regop:contacts", 
	"footer", 
	array(
		"COMPONENT_TEMPLATE" => "footer",
		"IBLOCK_TYPE" => "references",
		"IBLOCK_ID" => "21",
		"ELEMENT_ID" => "377",
		"SECTION_ID" => "8"
	),
	false
);?>
				</div>
				<div class="footer-column">
					<?$APPLICATION->IncludeComponent(
						"regop:menu", 
						"footer", 
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "footer",
							"COMPONENT_TEMPLATE" => "footer",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "footer",
							"USE_EXT" => "N"
						),
						false
					);?>
				</div>
				<div class="footer-column">
					<h4 class="footer-title">Мы в социальных сетях:</h4>
					<?$APPLICATION->IncludeComponent(
						"regop:social", 
						".default", 
						array(
							"IBLOCK_TYPE" => "references",
							"IBLOCK_ID" => "22",
							"COMPONENT_TEMPLATE" => ".default"
						),
						false
					);?>
				</div>
			</div>
			<div class="footer-wrap">
				<?$APPLICATION->IncludeComponent(
					"regop:copyright", 
					".default", 
					array(
						"COMPONENT_TEMPLATE" => ".default",
						"IBLOCK_TYPE" => "references",
						"IBLOCK_ID" => "23",
						"ELEMENT_ID" => "380"
					),
					false
				);?>
				<?$APPLICATION->IncludeComponent(
	"regop:files", 
	"footer", 
	array(
		"IBLOCK_ID" => "39",
		"IBLOCK_TYPE" => "documents",
		"COMPONENT_TEMPLATE" => "footer"
	),
	false
);?>
			</div>
		</footer>
	</body>
</html>