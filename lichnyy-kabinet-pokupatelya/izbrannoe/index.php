<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
?><?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.news", 
	".default", 
	array(
		"IBLOCK_TYPE" => "adverts",
		"ID" => "5",
		"SITE_ID" => "s1",
		"SORT_BY" => "ACTIVE_FROM",
		"SORT_ORDER" => "DESC",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>