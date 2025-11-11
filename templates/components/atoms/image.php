<?php
// Expects: $src, $alt, $class
$cssClass = isset($class) ? htmlspecialchars($class) : '';
?>
<img 
    src="<?php echo htmlspecialchars($src); ?>" 
    alt="<?php echo htmlspecialchars($alt); ?>"
    class="<?php echo $cssClass; ?>"
    loading="lazy"
>
