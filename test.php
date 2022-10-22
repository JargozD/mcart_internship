<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("тест");
?><?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth", Array(
	"FORGOT_PASSWORD_URL" => "/polzovatel/",	// Страница забытого пароля
		"PROFILE_URL" => "/polzovatel/profile.php",	// Страница профиля
		"REGISTER_URL" => "/polzovatel/registration.php",	// Страница регистрации
		"SHOW_ERRORS" => "N",	// Показывать ошибки
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>