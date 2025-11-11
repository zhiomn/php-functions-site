<?php
// Expects: $review
?>
<blockquote class="review-item">
    <p>"<?php echo htmlspecialchars($review['quote']); ?>"</p>
    <footer>
        - <?php echo htmlspecialchars($review['author']); ?>
        <?php if(!empty($review['source_url'])): ?>
            <?php render_component('atoms/link', ['href' => $review['source_url'], 'text' => '(fonte)', 'class' => 'review-source']); ?>
        <?php endif; ?>
    </footer>
</blockquote>
