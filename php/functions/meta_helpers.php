<?php
/**
 * Creates a standardized metadata array for page headers.
 *
 * @param array $data The source data array (e.g., $member, $project).
 * @param string $titleKey The key in the $data array to use for the title.
 * @param string $descriptionKey The key in the $data array to use for the description.
 * @param string $titleSuffix A suffix to append to the page title (e.g., ' | Site Name').
 * @return array An associative array with 'title' and 'description' keys.
 */
function create_page_meta($data, $titleKey, $descriptionKey, $titleSuffix = '') {
    $title = isset($data[$titleKey]) ? htmlspecialchars($data[$titleKey]) . $titleSuffix : '';
    $description = isset($data[$descriptionKey]) ? htmlspecialchars($data[$descriptionKey]) : '';

    return [
        'title' => $title,
        'description' => $description
    ];
}
