<?php
// Expects: $tool
?>
<a href="/ferramenta.php?id=<?php echo htmlspecialchars($tool['id']); ?>" class="tool-item-link">
    <div class="tool-item">
        <?php render_component('atoms/image', [
            'src' => $tool['imagePath'] ?? '/assets/img/placeholder.png',
            'alt' => 'Logo de ' . $tool['title'],
            'class' => 'tool-item-logo'
        ]); ?>
        <span class="tool-item-name"><?php echo htmlspecialchars($tool['title']); ?></span>
    </div>
</a>
