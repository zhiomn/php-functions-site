<?php
/**
 * Checks for a biographical event (e.g., 'birth', 'death') in a member's data
 * and resolves its location if the event exists.
 * This function depends on resolve_location.php.
 *
 * @param array &$member The member data array (passed by reference).
 * @param string $eventKey The key for the biographical event (e.g., 'birth').
 * @param array $locationsMap The map of all available locations.
 * @return void
 */
function resolveBiographicalLocation(&$member, $eventKey, $locationsMap) {
    if (isset($member['biography'][$eventKey])) {
        resolveLocation($member['biography'][$eventKey], 'locationId', $locationsMap);
    }
}
