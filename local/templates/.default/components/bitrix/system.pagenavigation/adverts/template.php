<?php
/*
 * Файл local/templates/.default/components/bitrix/system.pagenavigation/pager/template.php
 */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);

// ссылка на первую страницу
$firstPageUrl = $arResult['sUrlPath'];
if (!empty($arResult['NavQueryString'])) {
	$firstPageUrl = $firstPageUrl . '?' . $arResult['NavQueryString'];
}
// ссылка на последнюю страницу
$lastPageUrl = $arResult['sUrlPath'];
if (!empty($arResult['NavQueryString'])) {
	$lastPageUrl = $lastPageUrl . '?' . $arResult['NavQueryString']
		. '&amp;PAGEN_' . $arResult['NavNum'] . '=' . $arResult['NavPageCount'];
} else {
	$lastPageUrl = $lastPageUrl . '?PAGEN_' . $arResult['NavNum'] . '=' . $arResult['NavPageCount'];
}
?>

<div class="row">
	<div class="col-md-12 text-center">
		<div class="site-pagination">
			<? if ($arResult['NavPageNomer'] > 1) : ?>
				<a href="<?= $firstPageUrl ?>" title="Первая">«</a>
			<? endif; ?>

			<? for ($i = $arResult['nStartPage']; $i <= $arResult['nEndPage']; $i++) : ?>
				<?
				$pageUrl = $arResult['sUrlPath'];
				if (!empty($arResult['NavQueryString'])) {
					$pageUrl = $pageUrl . '?' . $arResult['NavQueryString'] . '&amp;PAGEN_' . $arResult['NavNum'] . '=' . $i;
				} else {
					$pageUrl = $pageUrl . '?PAGEN_' . $arResult['NavNum'] . '=' . $i;
				}
				?>
				
					<a href="<?= $pageUrl; ?>" <? if ($arResult['NavPageNomer'] == $i) : ?> class="active" <?endif?>><?= $i; ?></a>
				
			<? endfor; ?>

			<? if ($arResult['NavPageNomer'] < $arResult['NavPageCount']) : /* ссылка на последнюю страницу */ ?>
				<a href="<?= $lastPageUrl; ?>" title="Последняя">»</a>
			<? endif; ?>
		</div>
	</div>
</div>
<br>