<?php
/**
 * Universal layout component for detail pages.
 * Expects the following variables in scope:
 * @var string $pageId           The ID for the main <section> element.
 * @var string $contentComponent The path to the main content component to be rendered inside.
 * @var array  $contentData      The data to be passed to the content component.
 */

if (empty($pageId) || empty($contentComponent) || !isset($contentData)) {
    echo "<!-- Detail page layout component called with missing parameters. -->";
    return;
}
?>
<section id="<?php echo htmlspecialchars($pageId); ?>" class="page-content">
    <?php render_component($contentComponent, $contentData); ?>
</section>
