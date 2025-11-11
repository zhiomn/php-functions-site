<?php
// Expects: $tool
?>
<div class="tool-page-layout">
    <?php render_component('organisms/tool/_header', ['tool' => $tool]); ?>
    <?php render_component('organisms/tool/_links', ['tool' => $tool]); ?>
    <?php render_component('organisms/tool/_projects', ['tool' => $tool]); ?>
</div>
