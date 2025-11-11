<?php
require_once __DIR__ . '/scan_directory_for_json.php';

function loadTeamData() {
    return scan_directory_for_json(ROOT_PATH . '/data/team');
}

function loadRolesData() {
    return scan_directory_for_json(ROOT_PATH . '/data/roles');
}

function loadLocationsData() {
    return scan_directory_for_json(ROOT_PATH . '/data/locations');
}

function loadMediaData() {
    return scan_directory_for_json(ROOT_PATH . '/data/media');
}

function loadToolsData() {
    return scan_directory_for_json(ROOT_PATH . '/data/tools');
}

function loadProjectsData() {
    return scan_directory_for_json(ROOT_PATH . '/data/projects');
}
