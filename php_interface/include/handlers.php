<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Loader;

$eventManager = \Bitrix\Main\EventManager::getInstance();

/**
 * load common module
 */
//AddEventHandler("main", "OnPageStart", "loadLocalModule", 1);
//function loadLocalModule() {
//	Loader::includeModule("local.common");
//}

/**
 * part for event handlers
 */

// USER
// $eventManager->addEventHandler("main", "OnBeforeUserRegister", ["\\Local\\Common\\Handlers\\User", "beforeRegister"]);
// $eventManager->addEventHandler("main", "OnBeforeUserAdd", ["\\Local\\Common\\Handlers\\User", "beforeAdd"]);
// $eventManager->addEventHandler("main", "OnBeforeUserLogin", ["\\Local\\Common\\Handlers\\User", "beforeLogin"]);

//$eventManager->addEventHandler("main", "OnEpilog", ["CDecPage", "handlerOnEpilog"]);