<?php
// Expects: $project
if (empty($project['team'])) return;
?>
<section class="project-section">
    <h2>Equipe do Projeto</h2>
    <div class="credits-grid">
        <?php foreach ($project['team'] as $member): ?>
            <?php render_component('molecules/_team_member_item', ['member' => $member]); ?>
        <?php endforeach; ?>
    </div>
</section>
