<?php
// Expects: $project
$media = loadJsonFile(ROOT_PATH . '/data/media/' . $project['imageUrl'] . '.json');
$imagePath = $media['path'] ?? '/assets/img/placeholder.png';
$imageAlt = $media['alt'] ?? $project['title'];
?>
<a href="/projeto.php?id=<?php echo htmlspecialchars($project['id']); ?>" class="project-summary-link">
    <div class="project-summary-item">
        <?php render_component('atoms/image', ['src' => $imagePath, 'alt' => $imageAlt, 'class' => 'project-summary-image']); ?>
        <div class="project-summary-content">
            <h4><?php echo htmlspecialchars($project['title']); ?></h4>
            <p><?php echo htmlspecialchars($project['description']); ?></p>
        </div>
    </div>
</a>
