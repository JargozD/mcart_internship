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

<? foreach ($arResult["ITEMS"] as $arItem) : ?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="review-block" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
		<div class="review-text">

			<div class="review-block-title">
				<span class="review-block-name">
					<a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a>
				</span>
				<span class="review-block-description"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?> <? echo GetMessage("YEAR") ?>, <? echo $arItem["PROPERTIES"]["POSITION"]["VALUE"] ?>, <? echo $arItem["PROPERTIES"]["COMPANY"]["VALUE"] ?></span>
			</div>

			<div class="review-text-cont">
				<? echo $arItem["PREVIEW_TEXT"]; ?>
			</div>
		</div>
		<div class="review-img-wrap">
			<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">

				<?
				$resize_image = CFile::ResizeImageGet(
					$arItem["PREVIEW_PICTURE"]['ID'],
					array("width" => 68, "height" => 50),
					BX_RESIZE_IMAGE_EXACT ,
					false
				);
				?>

				<? if ($arItem["PREVIEW_PICTURE"]["SRC"]) : ?>
					<img src="<?= $resize_image['src'] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
				<? else : ?>
					<img src="<?= SITE_TEMPLATE_PATH . "/img/rew/no_photo.jpg" ?>" alt="">
				<? endif ?>
			</a>
		</div>
	</div>
<? endforeach; ?>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
	<br /><?= $arResult["NAV_STRING"] ?>
<? endif; ?>