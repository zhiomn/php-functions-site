<?php
// Expects: $href, $text, $class (optional), $title (optional)
$cssClass = isset($class) ? htmlspecialchars($class) : '';
$linkTitle = isset($title) ? htmlspecialchars($title) : '';
?>
<a 
    href="<?php echo htmlspecialchars($href); ?>"
    class="<?php echo $cssClass; ?>"
    title="<?php echo $linkTitle; ?>"
    target="_blank" rel="noopener noreferrer"
>
    <?php echo htmlspecialchars($text); ?>
</a>
