<?php
require_once __DIR__ . '/load_json_file.php';

/**
 * Loads all items listed in a "barrel" file.
 *
 * @param string $barrelFile The path to the barrel file, relative to ROOT_PATH.
 * @param string $itemDir The directory of the items, relative to ROOT_PATH.
 * @return array An array of all loaded items.
 */
function loadBarrelData($barrelFile, $itemDir) {
    $barrelPath = ROOT_PATH . '/' . $barrelFile;
    $fileList = loadJsonFile($barrelPath);
    if (!is_array($fileList)) return [];

    $items = [];
    foreach ($fileList as $file) {
        $itemPath = ROOT_PATH . '/' . $itemDir . $file;
        $itemData = loadJsonFile($itemPath);
        if ($itemData) {
            $items[] = $itemData;
        }
    }
    return $items;
}
