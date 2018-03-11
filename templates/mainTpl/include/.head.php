<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var CMain $APPLICATION
 * @var CUser $USER
 */
if (!$USER->IsAuthorized()) {
	CJSCore::Init(['fx', 'ajax', 'json', 'ls', 'session', 'popup', 'pull']);
}

$assets = \Bitrix\Main\Page\Asset::getInstance();
/**
 * CSS
 */
//$assets->addCss(SITE_TEMPLATE_PATH . '/css/vendors.min.css');
$assets->addCss(SITE_TEMPLATE_PATH . '/css/base.css');

/**
 * JS
 */
//$assets->addJs(SITE_TEMPLATE_PATH . '/js/vendors.min.js');
$assets->addJs(SITE_TEMPLATE_PATH . '/js/common.js');

/**
 * Strings
 */
//$assets->addString('some string...');
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<? $APPLICATION->ShowHead(); ?>
<title><? $APPLICATION->ShowTitle() ?></title>