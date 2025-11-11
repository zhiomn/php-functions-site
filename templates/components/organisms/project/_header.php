<?php
// Expects: $project
?>
<header class="project-header">
    <h1><?php echo htmlspecialchars($project['title']); ?></h1>
    <?php render_component('molecules/_version_info', ['project' => $project]); ?>
    <p class="page-intro"><?php echo htmlspecialchars($project['description']); ?></p>
    <?php render_component('molecules/_tags', ['project' => $project]); ?>
</header>
