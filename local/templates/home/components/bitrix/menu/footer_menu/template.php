<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>
	<div class="col-lg-4 mb-5 mb-lg-0">
		<div class="row mb-5">
			<div class="col-md-12">
				<h3 class="footer-heading mb-4">Navigations</h3>
			</div>

			<div class="col-md-6 col-lg-6">
				<ul class="list-unstyled">

					<?
					foreach (array_slice($arResult, 0, 3)  as $arItem) :
						if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
							continue;
					?>

						<? if ($arItem["IS_PARENT"]) : ?>

							<? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
								<li class="has-children"><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
							<? else : ?>
								<li <? if ($arItem["SELECTED"]) : ?>class="active" <? endif ?>><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
							<? endif ?>

						<? else : ?>

							<? if ($arItem["PERMISSION"] > "D") : ?>

								<? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
									<li <? if ($arItem["SELECTED"]) : ?>class="active" <? endif ?>><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
								<? else : ?>
									<li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
								<? endif ?>

							<? endif ?>

						<? endif ?>

					<? endforeach ?>

				</ul>
			</div>

			<div class="col-md-6 col-lg-6">
				<ul class="list-unstyled">

					<?
					foreach (array_slice($arResult, 3) as $arItem) :
						if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
							continue;
					?>

						<? if ($arItem["IS_PARENT"]) : ?>

							<? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
								<li class="has-children"><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
							<? else : ?>
								<li <? if ($arItem["SELECTED"]) : ?>class="active" <? endif ?>><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
							<? endif ?>

						<? else : ?>

							<? if ($arItem["PERMISSION"] > "D") : ?>

								<? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
									<li <? if ($arItem["SELECTED"]) : ?>class="active" <? endif ?>><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
								<? else : ?>
									<li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
								<? endif ?>

							<? endif ?>

						<? endif ?>

					<? endforeach ?>

				</ul>
			</div>

		</div>
	</div>
<? endif ?>