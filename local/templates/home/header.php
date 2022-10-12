<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<?php
IncludeTemplateLangFile(__FILE__);
?>


<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
  <?
  $APPLICATION->ShowHead();

  $APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");

  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/animate.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");

  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/aos.css");

  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css");


  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-3.3.1.min.js');
  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-migrate-3.0.1.min.js');
  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-ui.js');
  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/popper.min.js');
  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/mediaelement-and-player.min.js');
  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.stellar.min.js');
  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.countdown.min.js');
  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.magnific-popup.min.js');
  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/bootstrap-datepicker.min.js');
  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/aos.js');

  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js');

  ?>
  <title><? $APPLICATION->ShowTitle(); ?></title>
</head>

<body>

  <div id="panel"><? $APPLICATION->ShowPanel() ?></div>

  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3">
                <? $APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  ".default",
                  array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/header_phone.php",
                    "COMPONENT_TEMPLATE" => ".default"
                  ),
                  false
                ); ?>
              </a>
              <a href="#">
                <? $APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  ".default",
                  array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/header_mail.php",
                    "COMPONENT_TEMPLATE" => ".default"
                  ),
                  false
                ); ?>
              </a>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
            <? $APPLICATION->IncludeComponent(
              "bitrix:main.include",
              ".default",
              array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/header_icons.php",
                "COMPONENT_TEMPLATE" => ".default"
              ),
              false
            ); ?>
          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="">
              <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/header_logo.php",
                  "COMPONENT_TEMPLATE" => ".default"
                ),
                false
              ); ?>
            </h1>
          </div>

          <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_top", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu_top"
	),
	false
); ?>

          


        </div>
      </div>
    </div>
  </div>