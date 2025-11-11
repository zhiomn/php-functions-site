<?php
// Expects: $member
if (empty($member['projectRoles'])) return;
?>
<div class="member-section member-projects">
    <h2>Contribuições em Projetos</h2>
    <?php foreach ($member['projectRoles'] as $projectId => $contribution): ?>
        <?php render_component('molecules/project_contribution', ['projectId' => $projectId, 'contribution' => $contribution]); ?>
    <?php endforeach; ?>
</div>
