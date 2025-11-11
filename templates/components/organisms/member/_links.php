<?php
// Expects: $member
if (empty($member['links'])) return;
?>
<div class="member-section member-links">
    <h2>Presença Online</h2>
    <ul>
        <?php foreach ($member['links'] as $link): ?>
            <li>
                <?php render_component('atoms/link', ['href' => $link['url'], 'text' => $link['title']]); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
