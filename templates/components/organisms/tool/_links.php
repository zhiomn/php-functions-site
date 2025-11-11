<?php
// Expects: $tool
if(empty($tool['links'])) return;
?>
<section class="tool-section">
    <h2>Links Oficiais</h2>
    <ul class="tool-links-list">
        <?php foreach($tool['links'] as $link): ?>
            <li><?php render_component('atoms/link', ['href' => $link['url'], 'text' => $link['title']]); ?></li>
        <?php endforeach; ?>
    </ul>
</section>
