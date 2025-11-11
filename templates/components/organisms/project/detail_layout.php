<?php
// Expects: $project
?>
<div class="project-page-layout">
    <?php render_component('organisms/project/_header', ['project' => $project]); ?>
    <?php render_component('organisms/project/_main_image', ['project' => $project]); ?>
    
    <div class="project-content-body">
        <?php render_component('organisms/project/_team', ['project' => $project]); ?>
        <?php render_component('organisms/project/_supporters', ['project' => $project]); ?>
        <?php render_component('organisms/project/_tools', ['project' => $project]); ?>
        <?php render_component('organisms/project/_screenshots', ['project' => $project]); ?>
        <?php render_component('organisms/project/_reviews', ['project' => $project]); ?>
        <?php render_component('organisms/project/_release_history', ['project' => $project]); ?>
    </div>
</div>
