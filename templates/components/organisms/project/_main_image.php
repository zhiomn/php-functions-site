<?php
// Expects: $project
?>
<div class="project-main-image">
    <?php render_component('atoms/image', ['src' => $project['imagePath'], 'alt' => $project['imageAlt']]); ?>
</div>
