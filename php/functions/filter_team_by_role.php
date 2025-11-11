<?php
/**
 * Filters an array of team members to find those with a specific general role.
 *
 * @param array $allTeamMembers The complete array of rich team member objects.
 * @param string $roleId The ID of the role to filter by.
 * @return array A new array containing only the members who have the specified role.
 */
function filterTeamByRole($allTeamMembers, $roleId) {
    if (empty($allTeamMembers) || !$roleId) {
        return [];
    }

    return array_filter($allTeamMembers, function($member) use ($roleId) {
        if (empty($member['generalRoles'])) {
            return false;
        }
        foreach ($member['generalRoles'] as $role) {
            if (($role['id'] ?? null) === $roleId) {
                return true;
            }
        }
        return false;
    });
}
