<?php
/**
 * Safely loads and decodes a JSON file from a given path.
 *
 * @param string $path The full path to the JSON file.
 * @return array|null The decoded JSON data as an associative array, or null on failure.
 */
function loadJsonFile($path) {
    if (!file_exists($path)) return null;
    $content = file_get_contents($path);
    return json_decode($content, true);
}
