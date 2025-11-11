<?php
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/php/core_bootstrap.php';
require_once ROOT_PATH . '/php/data_services/get_single_rich_member.php';

header('Content-Type: text/html; charset=utf-8');

$memberId = $_GET['id'] ?? null;
if (!$memberId) {
    http_response_code(400);
    echo '<p>Erro: ID do membro não fornecido.</p>';
    exit;
}

$member = getSingleRichMember($memberId);
if (!$member) {
    http_response_code(404);
    echo '<p>Erro: Membro da equipe não encontrado.</p>';
    exit;
}

ob_start();
render_component('organisms/member/detail_layout', ['member' => $member]);
$html = ob_get_clean();
echo $html;
