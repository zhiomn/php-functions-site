<?php
require_once ROOT_PATH . '/php/functions/load_barrel_data.php';

function loadTeamData() {
    return loadBarrelData('data/team.json', 'data/team/');
}

function loadRolesData() {
    return loadBarrelData('data/roles.json', 'data/roles/');
}

function loadLocationsData() {
    return loadBarrelData('data/locations.json', 'data/locations/');
}

function loadMediaData() {
    return loadBarrelData('data/media.json', 'data/media/');
}

function loadToolsData() {
    return loadBarrelData('data/tools.json', 'data/tools/');
}

function loadProjectsData() {
    return loadBarrelData('data/projects.json', 'data/projects/');
}
