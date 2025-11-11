<?php
// Expects: $project
$media = loadJsonFile(ROOT_PATH . '/data/media/' . $project['imageUrl'] . '.json');
$imagePath = $media['path'] ?? '/assets/img/placeholder.png';
$imageAlt = $media['alt'] ?? $project['title'];
?>
<div class="project-modal-content">
    <?php render_component('atoms/image', ['src' => $imagePath, 'alt' => $imageAlt, 'class' => 'modal-image']); ?>
    <h2><?php echo htmlspecialchars($project['title']); ?></h2>
    <p><?php echo htmlspecialchars($project['description']); ?></p>
    <a href="/projeto.php?id=<?php echo htmlspecialchars($project['id']); ?>" class="view-more-prompt">Ver página completa do projeto</a>
</div>
