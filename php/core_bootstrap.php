<?php
/**
 * Core Bootstrap File for Public Pages.
 * Defines essential constants and includes universal functions.
 */

// 1. Define the absolute root path of the project if not already defined.
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}

// 2. Include universal helper functions required by almost every page.
require_once ROOT_PATH . '/php/functions/rendering.php';
require_once ROOT_PATH . '/php/functions/page_helpers.php';
require_once ROOT_PATH . '/php/functions/meta_helpers.php';
