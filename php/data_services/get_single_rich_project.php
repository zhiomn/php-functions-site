<?php
require_once __DIR__ . '/get_all_rich_team_data.php';
require_once __DIR__ . '/get_all_rich_tools_data.php';
require_once ROOT_PATH . '/php/functions/load_json_file.php';
require_once ROOT_PATH . '/php/functions/create_map_from_array.php';
require_once ROOT_PATH . '/php/functions/get_contributors_for_project.php';

function getSingleRichProject($projectId) {
    if (!$projectId) return null;

    $project = loadJsonFile(ROOT_PATH . '/data/projects/' . $projectId . '.json');
    if (!$project) return null;

    // Load all necessary relational data
    $allTeam = getAllRichTeamData();
    $allTools = getAllRichToolsData();
    $allMedia = loadMediaData();

    // Create maps for quick lookup
    $teamMap = createMapFromArray($allTeam);
    $toolsMap = createMapFromArray($allTools);
    $mediaMap = createMapFromArray($allMedia);

    // Enrich the project object
    $project['imagePath'] = $mediaMap[$project['imageUrl']]['path'] ?? null;
    
    // Enrich screenshots
    if (!empty($project['screenshots'])) {
        $project['screenshots'] = array_filter(array_map(fn($id) => $mediaMap[$id] ?? null, $project['screenshots']));
    }

    // Enrich tools
    if (!empty($project['tools'])) {
        $project['tools'] = array_filter(array_map(fn($id) => $toolsMap[$id] ?? null, $project['tools']));
    }

    // Get team contributors
    $project['team'] = getContributorsForProject($allTeam, $projectId);

    // Get supporters
    if (!empty($project['supporters'])) {
        $project['supporters'] = array_filter(array_map(fn($id) => $teamMap[$id] ?? null, $project['supporters']));
    }

    return $project;
}
