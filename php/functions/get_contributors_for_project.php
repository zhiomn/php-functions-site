<?php
/**
 * Filters and formats a list of all team members to get only the
 * contributors for a specific project.
 *
 * @param array $allTeamMembers The complete list of rich team members.
 * @param string $projectId The ID of the project to filter by.
 * @return array The formatted list of contributors for the project.
 */
function getContributorsForProject($allTeamMembers, $projectId) {
    if (empty($allTeamMembers) || !$projectId) return [];

    // 1. Filter to get only members who worked on this project
    $contributors = array_filter($allTeamMembers, function($member) use ($projectId) {
        return isset($member['projectRoles'][$projectId]);
    });

    // 2. Map the filtered list to attach the specific contribution data
    return array_map(function($member) use ($projectId) {
        $member['projectContribution'] = $member['projectRoles'][$projectId];
        return $member;
    }, $contributors);
}
