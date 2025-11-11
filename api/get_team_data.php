<?php
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/php/data_services/get_all_rich_team_data.php';

header('Content-Type: application/json; charset=utf-8');

$teamData = getAllRichTeamData();

echo json_encode($teamData);
