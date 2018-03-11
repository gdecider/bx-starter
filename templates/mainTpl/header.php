<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var CMain $APPLICATION
 * @var CUser $USER
 */
$curPage = $APPLICATION->GetCurPage(false);
?>
<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
<head>
	<? include __DIR__ . '/include/.head.php'; ?>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
