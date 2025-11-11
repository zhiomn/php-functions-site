<?php
// Expects: $projectId, $contribution
$projectTitle = ucwords(str_replace('-', ' ', $projectId));
?>
<div class="project-contribution">
    <h3>
        <?php render_component('atoms/link', ['href' => '/projeto.php?id=' . $projectId, 'text' => $projectTitle, 'class' => 'project-title-link']); ?>
    </h3>
    
    <?php if (!empty($contribution['description'])): ?>
        <p class="project-general-desc"><?php echo htmlspecialchars($contribution['description']); ?></p>
    <?php endif; ?>
    
    <?php if (!empty($contribution['roles'])): ?>
        <ul class="project-roles-list">
            <?php foreach ($contribution['roles'] as $role): ?>
                <li>
                    <strong><?php echo htmlspecialchars($role['title']); ?>:</strong>
                    <?php if (!empty($role['description'])): ?>
                        <span><?php echo htmlspecialchars($role['description']); ?></span>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
