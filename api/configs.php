<?php
// Endpoint seguro para expor configurações específicas para o JavaScript.
if (!defined('ROOT_PATH')) { define('ROOT_PATH', dirname(__DIR__)); }
include ROOT_PATH . '/admin/editor/auth.php'; // Protege o endpoint

header('Content-Type: application/json');

$configName = $_GET['name'] ?? '';
$configPath = ROOT_PATH . '/admin/editor/config/' . $configName . '.config.php';

if (file_exists($configPath)) {
    $config = include $configPath;
    echo json_encode($config);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Config not found']);
}
