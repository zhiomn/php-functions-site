<?php
/**
 * Creates an associative array (map) from an array of arrays,
 * using a specified key from the inner arrays as the new key.
 *
 * @param array $array The source array of arrays.
 * @param string $key The key to use for the new map's keys.
 * @return array The resulting map.
 */
function createMapFromArray($array, $key = 'id') {
    if (empty($array)) return [];
    return array_column($array, null, $key);
}
