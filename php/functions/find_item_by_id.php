<?php
/**
 * Finds a single item in an array of items by its 'id' key.
 *
 * @param array $items The array of items to search through.
 * @param string $id The ID of the item to find.
 * @return array|null The found item, or null if not found.
 */
function findItemById($items, $id) {
    if (empty($items) || !$id) return null;
    
    foreach ($items as $item) {
        if (($item['id'] ?? null) === $id) {
            return $item;
        }
    }
    return null;
}
