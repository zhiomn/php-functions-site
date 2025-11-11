<?php

require_once ROOT_PATH . '/php/functions/load_data.php';
require_once ROOT_PATH . '/php/functions/create_map_from_array.php';
require_once ROOT_PATH . '/php/functions/resolve_image.php';
require_once ROOT_PATH . '/php/functions/resolve_tool_projects.php';

function getAllRichToolsData() {
    // 1. Load raw data
    $tools = loadToolsData();
    $projects = loadProjectsData();
    $media = loadMediaData();

    // 2. Create lookup maps
    $projectsMap = createMapFromArray($projects);
    $mediaMap = createMapFromArray($media);

    // 3. Enrich each tool
    return array_map(function($tool) use ($projectsMap, $mediaMap) {
        resolveImage($tool, $mediaMap, 'image');
        resolveToolProjects($tool, $projectsMap);
        
        return $tool;
    }, $tools);
}
