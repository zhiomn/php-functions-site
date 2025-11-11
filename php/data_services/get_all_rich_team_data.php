<?php

require_once ROOT_PATH . '/php/functions/load_data.php';
require_once ROOT_PATH . '/php/functions/create_map_from_array.php';
require_once ROOT_PATH . '/php/functions/resolve_location.php';
require_once ROOT_PATH . '/php/functions/resolve_biographical_location.php';
require_once ROOT_PATH . '/php/functions/resolve_general_roles.php';
require_once ROOT_PATH . '/php/functions/resolve_project_roles.php';

function getAllRichTeamData() {
    // 1. Load raw data
    $teamMembers = loadTeamData();
    $roles = loadRolesData();
    $locations = loadLocationsData();
    $media = loadMediaData();

    // 2. Create lookup maps for efficient processing
    $rolesMap = createMapFromArray($roles);
    $locationsMap = createMapFromArray($locations);
    $mediaMap = createMapFromArray($media);

    // 3. Enrich each team member with related data
    return array_map(function($member) use ($rolesMap, $locationsMap, $mediaMap) {
        $member['imageUrlPath'] = $mediaMap[$member['imageUrl']]['path'] ?? null;

        resolveBiographicalLocation($member, 'birth', $locationsMap);
        resolveBiographicalLocation($member, 'death', $locationsMap);

        resolveGeneralRoles($member, $rolesMap);
        resolveProjectRoles($member, $rolesMap);
        
        return $member;
    }, $teamMembers);
}
