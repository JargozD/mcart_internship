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

<div class="pt-5">
	<div class="container">
		<form class="row" name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action="<? echo $arResult["FORM_ACTION"] ?>" method="get">

			<? if ($arResult["arrProp"][25]["CODE"] == "ADDRESS") : ?>
				<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
						<? if (!array_key_exists("HIDDEN", $arItem)) : ?>						
							<input class="form-control" type="text" name="arrFilter_pf[<? echo $arResult["arrProp"][25]["CODE"]?>]" size="20" value="<?= $arResult["ITEMS"]["PROPERTY_25"]["INPUT_VALUE"] ?>" placeholder="<?= $arResult["ITEMS"]["PROPERTY_25"]["NAME"] ?>" />
						<? endif ?>					
				</div>
			<? endif; ?>

			<? if ($arResult["arrProp"][13]["CODE"] == "BATHS") : ?>
				<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
						<? if (!array_key_exists("HIDDEN", $arItem)) : ?>						
							<input class="form-control" type="text" name="arrFilter_pf[<? echo $arResult["arrProp"][13]["CODE"]?>]" size="20" value="<?= $arResult["ITEMS"]["PROPERTY_13"]["INPUT_VALUE"] ?>" placeholder="<?= $arResult["ITEMS"]["PROPERTY_13"]["NAME"] ?>" />
						<? endif ?>					
				</div>
			<? endif; ?>

			<? if ($arResult["arrProp"][11]["CODE"] == "STAGES") : ?>
				<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
						<? if (!array_key_exists("HIDDEN", $arItem)) : ?>						
							<input class="form-control" type="text" name="arrFilter_pf[<? echo $arResult["arrProp"][11]["CODE"]?>]" size="20" value="<?= $arResult["ITEMS"]["PROPERTY_11"]["INPUT_VALUE"] ?>" placeholder="<?= $arResult["ITEMS"]["PROPERTY_11"]["NAME"] ?>" />
						<? endif ?>					
				</div>
			<? endif; ?>

			<? if ($arResult["arrProp"][14]["CODE"] == "GARAGE") : ?>
				<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
						<? if (!array_key_exists("HIDDEN", $arItem)) : ?>						
							<input class="form-control" type="text" name="arrFilter_pf[<? echo $arResult["arrProp"][14]["CODE"]?>]" size="20" value="<?= $arResult["ITEMS"]["PROPERTY_14"]["INPUT_VALUE"] ?>" placeholder="<?= $arResult["ITEMS"]["PROPERTY_14"]["NAME"] ?>" />
						<? endif ?>					
				</div>
			<? endif; ?>

			<? if ($arResult["arrProp"][12]["CODE"] == "AREA") : ?>
				<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
						<? if (!array_key_exists("HIDDEN", $arItem)) : ?>						
							<input class="form-control" type="text" name="arrFilter_pf[<? echo $arResult["arrProp"][12]["CODE"]?>][LEFT]" size="20" value="<?= $arResult["ITEMS"]["PROPERTY_12"]["INPUT_VALUE"]["LEFT"] ?>" placeholder="<?= $arResult["ITEMS"]["PROPERTY_12"]["NAME"] ?> от:" />
							<input class="form-control" type="text" name="arrFilter_pf[<? echo $arResult["arrProp"][12]["CODE"]?>][RIGHT]" size="20" value="<?= $arResult["ITEMS"]["PROPERTY_12"]["INPUT_VALUE"]["RIGHT"] ?>" placeholder="<?= $arResult["ITEMS"]["PROPERTY_12"]["NAME"] ?> до:" />
							<? endif ?>					
				</div>
			<? endif; ?>

			<? if ($arResult["arrProp"][9]["CODE"] == "PRICE") : ?>
				<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
						<? if (!array_key_exists("HIDDEN", $arItem)) : ?>						
							<input class="form-control" type="text" name="arrFilter_pf[<? echo $arResult["arrProp"][9]["CODE"]?>]" size="20" value="<?= $arResult["ITEMS"]["PROPERTY_9"]["INPUT_VALUE"] ?>" placeholder="<?= $arResult["ITEMS"]["PROPERTY_9"]["NAME"] ?>" />
						<? endif ?>					
				</div>
			<? endif; ?>

			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<input type="submit" name="set_filter" class="btn btn-primary btn-block form-control-same-height rounded-0" value="<?= GetMessage("IBLOCK_SET_FILTER") ?>" />

			</div>

			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">

				<input type="submit" name="del_filter" class="btn btn-primary btn-block form-control-same-height rounded-0" value="<?= GetMessage("IBLOCK_DEL_FILTER") ?>" />
			</div>

		</form>

	</div>
</div>