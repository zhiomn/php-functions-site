<?php
// Expects: $member
?>
<div class="member-page-layout">
    <aside class="member-sidebar">
        <?php render_component('organisms/member/_header', ['member' => $member]); ?>
        <?php render_component('organisms/member/_links', ['member' => $member]); ?>
    </aside>
    <main class="member-main-content">
        <?php render_component('organisms/member/_projects', ['member' => $member]); ?>
        <?php render_component('organisms/member/_supported_projects', ['member' => $member]); ?>
    </main>
</div>
