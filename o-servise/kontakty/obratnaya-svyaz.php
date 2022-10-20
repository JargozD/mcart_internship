<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
$APPLICATION->AddChainItem("Обратная связь", "/o-servise/kontakty/obratnaya-svyaz.php");
?>

<div class="site-section">
	<div class="container">
		<div class="row">

			<? $APPLICATION->IncludeComponent(
				"bitrix:main.feedback",
				"feedback_form",
				array(
					"EMAIL_TO" => "admin@study25.local.mcart.ru",
					"EVENT_MESSAGE_ID" => "",
					"OK_TEXT" => "Спасибо, ваше сообщение принято.",
					"REQUIRED_FIELDS" => "",
					"USE_CAPTCHA" => "Y"
				)
			);
			?>

			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				array(
					"COMPONENT_TEMPLATE" => ".default",
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/include/page_feedback_form.php",
					"EDIT_TEMPLATE" => ""
				),
				false
			);
			?>

		</div>
	</div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>