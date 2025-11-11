<?php
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/php/functions/load_data.php';
require_once ROOT_PATH . '/php/functions/create_map_from_array.php';

header('Content-Type: application/json; charset=utf-8');

$projects = loadProjectsData();
$media = loadMediaData();
$mediaMap = createMapFromArray($media);

$placeholderImage = "data:image/svg+xml,%3Csvg width='300' height='200' xmlns='http://www.w3.org/2000/svg'%3E%3Crect width='100%25' height='100%25' fill='%231e1e1e'/%3E%3Ctext x='50%25' y='50%25' fill='%23444' font-family='sans-serif' font-size='16' text-anchor='middle' dy='.3em'%3EImagem n%C3%A3o encontrada%3C/text%3E%3C/svg%3E";

$enrichedProjects = array_map(function($project) use ($mediaMap, $placeholderImage) {
    $mediaItem = $mediaMap[$project['imageUrl']] ?? null;
    $project['imagePath'] = $mediaItem['path'] ?? $placeholderImage;
    $project['imageAlt'] = $mediaItem['alt'] ?? $project['title'];
    return $project;
}, $projects);

echo json_encode($enrichedProjects);
