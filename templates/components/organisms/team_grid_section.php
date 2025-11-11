<?php
/**
 * Renders a full section with a title and a grid of team members.
 * Expects:
 * @var string $title The title of the section.
 * @var array $members The array of member objects to display.
 */
?>
<section class="team-grid-section page-content">
    <h2><?php echo htmlspecialchars($title); ?></h2>

    <?php if (empty($members)): ?>
        <p>Nenhum membro encontrado para esta categoria.</p>
    <?php else: ?>
        <div class="grid-container" id="team-grid-<?php echo strtolower(preg_replace('/[^a-zA-Z0-9-]/', '-', $title)); ?>">
            <!-- JS will render member cards here -->
        </div>
        <script type="module">
            import { createTeamSummaryCard } from '/js/renderer/team.renderer.js';
            
            const container = document.getElementById('team-grid-<?php echo strtolower(preg_replace('/[^a-zA-Z0-9-]/', '-', $title)); ?>');
            const membersData = <?php echo json_encode(array_values($members)); ?>;

            const cardsHtml = membersData.map(createTeamSummaryCard).join('');
            container.innerHTML = cardsHtml;
        </script>
    <?php endif; ?>
</section>
