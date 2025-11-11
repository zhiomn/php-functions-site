<?php
/**
 * Universal "guard clause" for detail pages.
 * Validates the presence of an ID in the URL, calls a data loading function,
 * validates the result, and redirects on failure.
 *
 * @param callable $dataLoader A function that accepts an ID and returns the data.
 * @param string $fallbackPath The URL to redirect to on failure.
 * @param string $paramName The name of the URL parameter to get the ID from (default: 'id').
 * @return mixed The data loaded by the callable on success.
 */
function validate_and_get_page_data(callable $dataLoader, $fallbackPath, $paramName = 'id') {
    $itemId = $_GET[$paramName] ?? null;

    if (!$itemId) {
        header("Location: " . $fallbackPath);
        exit;
    }

    $data = $dataLoader($itemId);

    if (!$data) {
        header("Location: " . $fallbackPath);
        exit;
    }

    return $data;
}
