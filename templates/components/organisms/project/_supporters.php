<?php
// Expects: $project
if (empty($project['supporters'])) return;
?>
<section class="project-section">
    <h2>Apoiadores</h2>
    <div class="supporters-grid">
        <?php foreach ($project['supporters'] as $supporter): ?>
            <?php render_component('molecules/_supporter_item', ['supporter' => $supporter]); ?>
        <?php endforeach; ?>
    </div>
</section>
