<?php
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/lib/php/data_services/get_single_rich_member.php';
require_once ROOT_PATH . '/lib/php/data_services/get_single_rich_tool.php';

header('Content-Type: application/json');

$tools = DataEnricher::getRichToolsData();

echo json_encode($tools);
