<?php
// Expects: $member
?>
<div class="credit-item">
    <a href="/membro.php?id=<?php echo htmlspecialchars($member['id']); ?>" class="credit-member-link">
        <?php render_component('atoms/image', [
            'src' => $member['imageUrlPath'] ?? '/assets/img/placeholder.png',
            'alt' => 'Retrato de ' . $member['name'],
            'class' => 'credit-member-portrait'
        ]); ?>
        <span class="credit-member-name"><?php echo htmlspecialchars($member['name']); ?></span>
    </a>
    <div class="credit-roles">
        <?php if(!empty($member['projectContribution']['roles'])): ?>
            <?php foreach($member['projectContribution']['roles'] as $role): ?>
                 <?php render_component('atoms/tag', [
                    'text' => $role['title'],
                    'href' => '/funcao.php?id=' . $role['id'],
                    'title' => $role['description'] ?? ''
                ]); ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
