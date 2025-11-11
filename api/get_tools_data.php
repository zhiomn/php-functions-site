<?php
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/php/data_services/get_all_rich_tools_data.php';

header('Content-Type: application/json');

$tools = getAllRichToolsData();

echo json_encode($tools);
