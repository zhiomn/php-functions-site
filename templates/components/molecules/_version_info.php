<?php
// Expects: $project
$latestRelease = null;
if (!empty($project['releases'])) {
    $latestRelease = end($project['releases']);
}
if (!$latestRelease) return;
?>
<span class="project-version-info">
    Versão <?php echo htmlspecialchars($latestRelease['version']); ?>
    (<?php echo (new DateTime($latestRelease['date']))->format('d/m/Y'); ?>)
</span>
