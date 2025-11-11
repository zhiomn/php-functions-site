<?php
// Expects: $screenshot (media object)
?>
<div class="screenshot-item">
    <?php render_component('atoms/image', [
        'src' => $screenshot['path'],
        'alt' => $screenshot['alt'],
        'class' => 'screenshot-image'
    ]); ?>
</div>
