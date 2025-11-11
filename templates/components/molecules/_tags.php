<?php
// Expects: $project
if (empty($project['tags'])) return;
?>
<div class="project-tags">
    <?php foreach ($project['tags'] as $tag): ?>
        <?php render_component('atoms/tag', ['text' => $tag]); ?>
    <?php endforeach; ?>
</div>
