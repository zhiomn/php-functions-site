<?php
// Expects: $supporter
?>
<a href="/membro.php?id=<?php echo htmlspecialchars($supporter['id']); ?>" class="supporter-item-link">
    <div class="supporter-item">
        <?php render_component('atoms/image', [
            'src' => $supporter['imageUrlPath'] ?? '/assets/img/placeholder.png',
            'alt' => 'Retrato de ' . $supporter['name'],
            'class' => 'supporter-avatar'
        ]); ?>
        <span class="supporter-name"><?php echo htmlspecialchars($supporter['name']); ?></span>
    </div>
</a>
