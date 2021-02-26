<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("NAME"),
	"DESCRIPTION" => GetMessage("DESCRIPTION"),
	"SORT" => 20,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "regop",
		"Региональный оператор Севера",
		"CHILD" => array(
			"ID" => "districts",
			"NAME" => "Районы обслуживания",
		),
	),
);

?>