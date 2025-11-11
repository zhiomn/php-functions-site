<?php
require_once __DIR__ . '/get_all_rich_team_data.php';
require_once ROOT_PATH . '/php/functions/find_item_by_id.php';

function getSingleRichMember($id) {
    $allMembers = getAllRichTeamData();
    return findItemById($allMembers, $id);
}
