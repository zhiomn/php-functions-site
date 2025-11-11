<?php
// Expects: $project
if (count($project['releases'] ?? []) <= 1) return;
?>
<section class="project-section">
    <h2>Histórico de Versões</h2>
    <ul class="release-history-list">
        <?php foreach (array_reverse($project['releases']) as $release): ?>
            <li>
                <strong>Versão <?php echo htmlspecialchars($release['version']); ?></strong>
                <span> - Lançada em <?php echo (new DateTime($release['date']))->format('d/m/Y'); ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
