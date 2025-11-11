<?php
// Expects: $tool
if(empty($tool['projects'])) return;
?>
<section class="tool-section">
    <h2>Projetos Utilizados</h2>
    <div class="tool-projects-grid">
        <?php foreach($tool['projects'] as $project): ?>
            <?php render_component('molecules/project_summary_item', ['project' => $project]); ?>
        <?php endforeach; ?>
    </div>
</section>
