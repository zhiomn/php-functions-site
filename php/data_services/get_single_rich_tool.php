<?php
require_once __DIR__ . '/get_all_rich_tools_data.php';
require_once ROOT_PATH . '/php/functions/find_item_by_id.php';

function getSingleRichTool($id) {
    $allTools = getAllRichToolsData();
    return findItemById($allTools, $id);
}
