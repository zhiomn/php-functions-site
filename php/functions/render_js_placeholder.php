<?php
/**
 * Renders a standard <section> element used as a mount point for JS-driven pages.
 *
 * @param string $pageId The ID to be assigned to the section element.
 * @return void
 */
function render_js_placeholder($pageId) {
    if (empty($pageId)) {
        echo "<!-- JS placeholder called with no ID. -->";
        return;
    }
    echo '<section id="' . htmlspecialchars($pageId) . '" class="page-content"></section>';
}
?>