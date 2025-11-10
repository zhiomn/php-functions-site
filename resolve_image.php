<?php
/**
 * Resolves an image ID within an item's data, adding the full image path.
 *
 * @param array &$item The item data array (passed by reference).
 * @param array $mediaMap The map of all available media.
 * @param string $imageKey The key in the item array that holds the image ID.
 * @return void
 */
function resolveImage(&$item, $mediaMap, $imageKey = 'image') {
    if (!empty($item[$imageKey])) {
        $item['imagePath'] = $mediaMap[$item[$imageKey]]['path'] ?? null;
    }
}
