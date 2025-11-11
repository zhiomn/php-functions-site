<?php
// Expects: $text, $href (optional), $title (optional)
$tagTitle = isset($title) ? htmlspecialchars($title) : '';

if (!empty($href)) {
    echo '<a href="' . htmlspecialchars($href) . '" class="role-tag" title="' . $tagTitle . '">' . htmlspecialchars($text) . '</a>';
} else {
    echo '<span class="role-tag" title="' . $tagTitle . '">' . htmlspecialchars($text) . '</span>';
}
