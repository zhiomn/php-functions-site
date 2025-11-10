<?php
/**
 * Resolves the project-specific roles for a team member, merging
 * base role data with project-specific descriptions.
 *
 * @param array &$member The member data array (passed by reference).
 * @param array $rolesMap The map of all available roles.
 * @return void
 */
function resolveProjectRoles(&$member, $rolesMap) {
    if (!empty($member['projectRoles'])) {
        foreach ($member['projectRoles'] as $projectId => &$projectRoleInfo) {
            if (!empty($projectRoleInfo['roles'])) {
                $projectRoleInfo['roles'] = array_filter(array_map(function($roleRef) use ($rolesMap) {
                    $baseRole = $rolesMap[$roleRef['roleId']] ?? null;
                    if (!$baseRole) return null;
                    return array_merge($baseRole, $roleRef);
                }, $projectRoleInfo['roles']));
            }
        }
    }
}
