<?php
/**
 * Resolves the project list for a tool, replacing project IDs
 * with full project objects.
 *
 * @param array &$tool The tool data array (passed by reference).
 * @param array $projectsMap The map of all available projects.
 * @return void
 */
function resolveToolProjects(&$tool, $projectsMap) {
    if (!empty($tool['projects'])) {
        $tool['projects'] = array_filter(array_map(function($projectId) use ($projectsMap) {
            return $projectsMap[$projectId] ?? null;
        }, $tool['projects']));
    }
}
