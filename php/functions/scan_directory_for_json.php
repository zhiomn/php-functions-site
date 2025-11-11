<?php
require_once __DIR__ . '/load_json_file.php';

/**
 * Scans a given directory recursively and loads all .json files found.
 * This is a highly reusable function for loading all data from a nested
 * directory structure without needing a barrel file.
 *
 * @param string $baseDir The full, absolute path to the directory to scan.
 * @return array An array of the decoded contents of all found JSON files.
 */
function scan_directory_for_json($baseDir) {
    if (!is_dir($baseDir)) {
        return [];
    }

    $items = [];
    $directoryIterator = new RecursiveDirectoryIterator($baseDir, RecursiveDirectoryIterator::SKIP_DOTS);
    $iterator = new RecursiveIteratorIterator($directoryIterator, RecursiveIteratorIterator::SELF_FIRST);

    foreach ($iterator as $fileInfo) {
        if ($fileInfo->isFile() && $fileInfo->getExtension() === 'json') {
            $itemData = loadJsonFile($fileInfo->getRealPath());
            if ($itemData) {
                $items[] = $itemData;
            }
        }
    }

    return $items;
}
