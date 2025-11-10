<?php
// Endpoint seguro para expor dados agregados para os editores JS de narrativas.
if (!defined('ROOT_PATH')) { define('ROOT_PATH', dirname(__DIR__)); }
include ROOT_PATH . '/admin/editor/auth.php'; // Protege o endpoint

header('Content-Type: application/json');

function load_barrel_data($barrel_file, $item_dir) {
    $barrel_path = ROOT_PATH . '/' . $barrel_file;
    $item_base_path = ROOT_PATH . '/' . $item_dir;

    if (!file_exists($barrel_path)) return [];

    $file_list = json_decode(file_get_contents($barrel_path), true);
    $items = [];
    foreach ($file_list as $file) {
        $item_path = $item_base_path . $file;
        if (file_exists($item_path)) {
            $items[] = json_decode(file_get_contents($item_path), true);
        }
    }
    return $items;
}

$response_data = [
    'scenes' => load_barrel_data('data/scenes.json', 'data/scenes/'),
    'characters' => load_barrel_data('data/characters.json', 'data/characters/'),
];

echo json_encode($response_data);
