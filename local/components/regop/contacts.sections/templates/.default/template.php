<?
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<div class="contacts-list">
	<? foreach($arResult as $group) { ?>
		<a href="<?=$group['URL'] ?>" class="contacts-list-link">
			<?=$group['NAME'] ?>
		</a>
	<? } ?>
</div>