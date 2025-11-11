<?php
// Expects: $member
$birthDate = $member['biography']['birth']['date'] ? (new DateTime($member['biography']['birth']['date']))->format('d/m/Y') : '';
$birthLocationName = $member['biography']['birth']['location']['name'] ?? '';
$birthLocationId = $member['biography']['birth']['location']['id'] ?? '';
?>
<div class="member-header">
    <?php render_component('atoms/image', [
        'src' => $member['imageUrlPath'] ?? '/assets/img/placeholder.png',
        'alt' => 'Retrato de ' . $member['name'],
        'class' => 'member-portrait'
    ]); ?>
    <div class="member-intro">
        <h1><?php echo htmlspecialchars($member['name']); ?></h1>
        <?php if (!empty($member['generalRoles'])): ?>
            <div class="member-roles">
                <?php foreach ($member['generalRoles'] as $role): ?>
                    <?php render_component('atoms/tag', [
                        'text' => $role['title'],
                        'href' => '/funcao.php?id=' . $role['id'],
                        'title' => $role['description']
                    ]); ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <p class="member-bio"><?php echo htmlspecialchars($member['bio']); ?></p>
        <?php if ($birthLocationName): ?>
            <p class="member-birth-info">
                Nascido em <?php echo $birthDate; ?> em 
                <?php render_component('atoms/link', ['href' => '/local.php?id=' . $birthLocationId, 'text' => $birthLocationName]); ?>
            </p>
        <?php endif; ?>
    </div>
</div>
