<?php
/**
 * Resolves the general roles for a team member, replacing role IDs
 * with full role objects.
 *
 * @param array &$member The member data array (passed by reference).
 * @param array $rolesMap The map of all available roles.
 * @return void
 */
function resolveGeneralRoles(&$member, $rolesMap) {
    if (!empty($member['generalRoles'])) {
        $member['generalRoles'] = array_filter(array_map(function($roleId) use ($rolesMap) {
            return $rolesMap[$roleId] ?? null;
        }, $member['generalRoles']));
    }
}
