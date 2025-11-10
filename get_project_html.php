<?php
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/php/functions/load_json_file.php';
require_once ROOT_PATH . '/php/functions/rendering.php';

header('Content-Type: text/html; charset=utf-8');

$projectId = $_GET['id'] ?? null;
if (!$projectId) {
    http_response_code(400);
    exit('<p>Erro: ID do projeto não fornecido.</p>');
}

$project = loadJsonFile(ROOT_PATH . '/data/projects/' . $projectId . '.json');
if (!$project) {
    http_response_code(404);
    exit('<p>Erro: Projeto não encontrado.</p>');
}

ob_start();
render_component('organisms/project_modal_content', ['project' => $project]);
$html = ob_get_clean();
echo $html;
