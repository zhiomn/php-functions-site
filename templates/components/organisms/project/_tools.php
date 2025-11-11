<?php
// Expects: $project
if (empty($project['tools'])) return;
?>
<section class="project-section">
    <h2>Ferramentas Utilizadas</h2>
    <div class="tools-grid">
        <?php foreach ($project['tools'] as $tool): ?>
            <?php render_component('molecules/_tool_item', ['tool' => $tool]); ?>
        <?php endforeach; ?>
    </div>
</section>
