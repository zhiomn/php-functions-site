<?php
// Expects: $tool
?>
<header class="tool-header">
    <?php if($tool['imagePath']): ?>
        <?php render_component('atoms/image', ['src' => $tool['imagePath'], 'alt' => 'Logo de ' . $tool['title'], 'class' => 'tool-logo']); ?>
    <?php endif; ?>
    <div class="tool-header-content">
        <h1><?php echo htmlspecialchars($tool['title']); ?></h1>
        <?php render_component('atoms/tag', ['text' => $tool['type']]); ?>
        <p class="page-intro"><?php echo htmlspecialchars($tool['description']); ?></p>
    </div>
</header>
