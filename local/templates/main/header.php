<?
	if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
		die();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
		<title><?$APPLICATION->ShowTitle()?></title>
		<?IncludeTemplateLangFile(__FILE__);?>
		<?$APPLICATION->AddHeadScript('//code.jquery.com/jquery-latest.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH ."/js/checkBrowser.js");?>
		<?$APPLICATION->SetAdditionalCSS('//fonts.googleapis.com/css?family=Fira+Sans+Condensed:400,700,900,700i');?>
		<?$APPLICATION->ShowHead();?>
		<?\Bitrix\Main\UI\Extension::load("ui.vue")?>
	</head>
	<body>
		<?
			$APPLICATION->ShowPanel();
		?>
		<header> 		
			<? 
				$APPLICATION->IncludeComponent(
	"regop:logo", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IMAGE" => "/local/templates/main/images/logo.svg"
	),
	false
);
			?>
			<? 
				$APPLICATION->IncludeComponent(
	"regop:contacts", 
	"header", 
	array(
		"COMPONENT_TEMPLATE" => "header",
		"IBLOCK_TYPE" => "references",
		"IBLOCK_ID" => "21",
		"ELEMENT_ID" => "377",
		"SECTION_ID" => "8"
	),
	false
);
			?>
			<div class="header-group">
				<?
					$APPLICATION->IncludeComponent(
	"regop:menu", 
	"header", 
	array(
		"COMPONENT_TEMPLATE" => "header",
		"ROOT_MENU_TYPE" => "header",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "header",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
); 
				?>
				<?
					$APPLICATION->IncludeComponent(
						"regop:menu", 
						"additional", 
						array(
							"COMPONENT_TEMPLATE" => "additional",
							"ROOT_MENU_TYPE" => "additional",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "additional",
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					); 
				?>
				<?
					$APPLICATION->IncludeComponent(
						"regop:social", 
						".default", 
						array(
							"IBLOCK_TYPE" => "references",
							"IBLOCK_ID" => "22",
							"COMPONENT_TEMPLATE" => ".default"
						),
						false
					); 
				?>
			</div>
		</header>
		<?
			$APPLICATION->IncludeComponent(
	"regop:banner", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"TITLE" => "ООО «Региональный оператор Севера»",
		"TEXT" => "Весь спектр услуг по транспортировке и размещению ТКО",
		"IMAGE" => "/local/templates/main/images/banner.jpg"
	),
	false
); 
		?>
		<main>
			<? if($APPLICATION->GetCurDir() != "/" && $APPLICATION->GetCurDir() != "/new_index/") {?>
				<h2><?$APPLICATION->ShowTitle()?></h2>
			<? } ?>