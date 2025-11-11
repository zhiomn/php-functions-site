<?php
// Expects: $project
if (empty($project['screenshots'])) return;
?>
<section class="project-section">
    <h2>Galeria</h2>
    <div class="screenshots-grid">
        <?php foreach ($project['screenshots'] as $screenshot): ?>
            <?php render_component('molecules/_screenshot_item', ['screenshot' => $screenshot]); ?>
        <?php endforeach; ?>
    </div>
</section>
