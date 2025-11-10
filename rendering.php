<?php
/**
 * Renderiza um componente passando um array de dados que será extraído em variáveis.
 *
 * @param string $componentPath O caminho para o componente a partir de 'templates/components/'.
 * @param array $data Os dados a serem passados para o componente.
 * @return void
 */
function render_component($componentPath, $data = []) {
    $fullPath = ROOT_PATH . '/templates/components/' . $componentPath . '.php';
    if (file_exists($fullPath)) {
        extract($data);
        include $fullPath;
    } else {
        echo "<!-- Component not found: {$componentPath} -->";
    }
}
