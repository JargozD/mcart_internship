<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?= $arResult["DETAIL_TEXT"]; ?>
		</div>
		<div class="review-autor">
			<?= $arResult["NAME"] ?>, <?= $arResult["DISPLAY_ACTIVE_FROM"] ?> <?= GetMessage("YEAR") ?>, <?= $arResult["PROPERTIES"]["POSITION"]["VALUE"] ?>, <?= $arResult["PROPERTIES"]["COMPANY"]["VALUE"] ?>.
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap">
		<? if ($arResult["DETAIL_PICTURE"]["SRC"]) : ?>
			<img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>">
		<? else : ?>
			<img src="<?= SITE_TEMPLATE_PATH . "/img/rew/no_photo.jpg" ?>">
		<? endif ?>

	</div>
</div>




<div class="exam-review-doc">
	<p><?= GetMessage("DOCUMENTS") ?></p>
	<? if (count($arResult["DISPLAY_PROPERTIES"]["DOCS"]["VALUE"]) > 1) : ?>

		<? foreach ($arResult["DISPLAY_PROPERTIES"]["DOCS"]["FILE_VALUE"] as $arItem) : ?>

			<div class="exam-review-item-doc">
				<img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/pdf_ico_40.png">
				<a href="<?= $arItem["SRC"] ?>" download><?= $arItem["ORIGINAL_NAME"] ?></a>
			</div>

		<? endforeach ?>

	<? else : ?>

		<div class="exam-review-item-doc">
			<img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/pdf_ico_40.png">
			<a href="<?= $arResult["DISPLAY_PROPERTIES"]["DOCS"]["FILE_VALUE"]["SRC"] ?>" download><?= $arResult["DISPLAY_PROPERTIES"]["DOCS"]["FILE_VALUE"]["ORIGINAL_NAME"] ?></a>
		</div>

	<? endif ?>

</div>