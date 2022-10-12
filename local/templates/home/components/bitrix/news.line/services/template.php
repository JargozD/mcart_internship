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

<div class="site-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 text-center mb-5">
				<div class="site-section-title">
					<h2><?=GetMessage('OUR_SERVICES')?></h2>
				</div>
			</div>
		</div>

		<div class="row">

			<? if (isset($arResult)) : ?>

				<div class="col-md-6 col-lg-4 mb-4">
					<a href="<?= $arResult["ITEMS"][0]["PROPERTY_LINK_OUT_VALUE"] ?>" class="service text-center border rounded">
						<span class="icon flaticon-house"></span>
						<h2 class="service-heading"><? echo $arResult["ITEMS"][0]["NAME"] ?></h2>
						<p><span class="read-more"><?=GetMessage('LEARN_MORE')?></span></p>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="<?= $arResult["ITEMS"][1]["PROPERTY_LINK_OUT_VALUE"] ?>" class="service text-center border rounded">
						<span class="icon flaticon-camera"></span>
						<h2 class="service-heading"><? echo $arResult["ITEMS"][1]["NAME"] ?></h2>
						<p><span class="read-more"><?=GetMessage('LEARN_MORE')?></span></p>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="<?= $arResult["ITEMS"][2]["PROPERTY_LINK_OUT_VALUE"] ?>" class="service text-center border rounded">
						<span class="icon flaticon-sold"></span>
						<h2 class="service-heading"><? echo $arResult["ITEMS"][2]["NAME"] ?></h2>
						<p><span class="read-more"><?=GetMessage('LEARN_MORE')?></span></p>
					</a>
				</div>

			<? endif; ?>

		</div>
	</div>
</div>