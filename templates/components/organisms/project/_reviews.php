<?php
// Expects: $project
if (empty($project['reviews'])) return;
?>
<section class="project-section">
    <h2>Reviews</h2>
    <div class="reviews-list">
        <?php foreach ($project['reviews'] as $review): ?>
            <?php render_component('molecules/_review_item', ['review' => $review]); ?>
        <?php endforeach; ?>
    </div>
</section>
