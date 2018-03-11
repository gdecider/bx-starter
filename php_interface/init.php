<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * Loading composer
 */
//if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
//    require_once __DIR__ . '/../vendor/autoload.php';
//}

// Подключение констант
if (file_exists(__DIR__ . '/../php_interface/include/constants.php')) {
	require_once(__DIR__ . '/../php_interface/include/constants.php');
}

// Подключение обработчиков событий
if (file_exists(__DIR__ . '/../php_interface/include/handlers.php')) {
	require_once(__DIR__ . '/../php_interface/include/handlers.php');
}

// Подключение глобальных функций (чаще всего используется для переноса кода сторонних разработчиков
// при получении проекта на доработку)
if (file_exists(__DIR__ . '/../php_interface/include/functions.php')) {
	require_once(__DIR__ . '/../php_interface/include/functions.php');
}

