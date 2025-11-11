<?php
require_once __DIR__ . '/filter_team_by_role.php';
require_once ROOT_PATH . '/php/functions/rendering.php';

/**
 * High-level orchestration function.
 * Filters a list of team members by a role and renders the entire section component.
 *
 * @param string $title The desired title for the section.
 * @param string $roleId The ID of the role to filter the team by.
 * @param array $allTeamMembers The complete array of rich team members.
 * @return void
 */
function render_team_section_by_role($title, $roleId, $allTeamMembers) {
    $filteredMembers = filterTeamByRole($allTeamMembers, $roleId);
    
    render_component('organisms/team_grid_section', [
        'title' => $title,
        'members' => $filteredMembers
    ]);
}
