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

<?
// var_dump($GLOBALS['USER']->GetID());

// echo '<pre>', var_dump($arParams), '</pre>';
// var_dump($GLOBALS['USER']);
echo '<pre>', var_dump($arResult["ITEMS"]), '</pre>';

$arUser = CUser::GetByID(3); // в $arResult["FIELDS"]["CREATED_BY"] хранится id пользователя, который создал элемент инфоблока (новость, статью)
$user = $arUser->Fetch();
echo $user["NAME"] . ' ' . $user["LAST_NAME"]; //Выводим имя и фамилию автора

?>





<div class="pt-5">
	<div class="container">
		<form class="row" name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action="<? echo $arResult["FORM_ACTION"] ?>" method="get">



			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<? if (!array_key_exists("HIDDEN", $arItem)) : ?>
					<!-- <input class="form-control" type="text" name="arrFilter_CREATED_BY" size="20" value="<?= $GLOBALS['USER']->GetID() ?>" placeholder="<?= $arParams["FIELD_CODE"][1] ?>" /> -->
					<!-- <input class="form-control" type="text" name="arrFilter_DATE_CREATE_2" size="20" <? //value="<?= $GLOBALS['USER']->GetID() 
																											?> placeholder="<?= $arParams["FIELD_CODE"][1] ?>" /> -->

				<? endif ?>
			</div>

			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<input type="submit" name="set_filter" class="btn btn-primary btn-block form-control-same-height rounded-0" value="<?= GetMessage("IBLOCK_SET_FILTER") ?>" />

			</div>

			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">

				<input type="submit" name="del_filter" class="btn btn-primary btn-block form-control-same-height rounded-0" value="<?= GetMessage("IBLOCK_DEL_FILTER") ?>" />
			</div>

		</form>


		<form name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action="<? echo $arResult["FORM_ACTION"] ?>" method="get">
			<? foreach ($arResult["ITEMS"] as $arItem) :
				if (array_key_exists("HIDDEN", $arItem)) :
					echo $arItem["INPUT"];
				endif;
			endforeach; ?>
			<table class="data-table" cellspacing="0" cellpadding="2">
				<thead>
					<tr>
						<td colspan="2" align="center"><?= GetMessage("IBLOCK_FILTER_TITLE") ?></td>
					</tr>
				</thead>
				<tbody>
					<? foreach ($arResult["ITEMS"] as $arItem) : ?>
						<?
						if (CUser::GetID() == $arItem["CREATED_BY"]) :
						
						?>
						<? if (!array_key_exists("HIDDEN", $arItem)) : ?>
							<tr>
								<td valign="top"><?= $arItem["CREATED_BY"] ?>:</td>
								<td valign="top"><?= $arItem["INPUT"] ?></td>
							</tr>
						<? endif ?>
						<?endif?>
					<? endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="2">
							<input type="submit" name="set_filter" value="<?= GetMessage("IBLOCK_SET_FILTER") ?>" /><input type="hidden" name="set_filter" value="Y" />&nbsp;&nbsp;<input type="submit" name="del_filter" value="<?= GetMessage("IBLOCK_DEL_FILTER") ?>" />
						</td>
					</tr>
				</tfoot>
			</table>
		</form>

	</div>
</div>