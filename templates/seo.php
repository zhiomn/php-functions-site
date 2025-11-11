<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
// Define valores padrão
$siteName = "Estúdio Ékkentros";
$defaultDescription = "Um estúdio criativo focado em experiências digitais memoráveis.";
$pageMeta = [];

// Se a página definiu um arquivo de configuração, vamos lê-lo
if (isset($pageConfigFile)) {
    // Constrói um caminho seguro para o arquivo JSON
    $jsonPath = __DIR__ . '/../data/' . $pageConfigFile;

    if (file_exists($jsonPath)) {
        $jsonContent = file_get_contents($jsonPath);
        $pageData = json_decode($jsonContent, true); // true para array associativo

        // Pega os metadados se existirem
        if (isset($pageData['meta'])) {
            $pageMeta = $pageData['meta'];
        }
    }
}

// Usa os dados do JSON ou os valores padrão (operador '??' é perfeito para isso)
$finalTitle = htmlspecialchars($pageMeta['title'] ?? $siteName);
$finalDescription = htmlspecialchars($pageMeta['description'] ?? $defaultDescription);
?>

<title><?php echo $finalTitle; ?></title>
<meta name="description" content="<?php echo $finalDescription; ?>">

<!-- Open Graph Tags para compartilhamento social -->
<meta property="og:title" content="<?php echo $finalTitle; ?>" />
<meta property="og:description" content="<?php echo $finalDescription; ?>" />
<meta property="og:type" content="website" />

<link rel="stylesheet" href="/css/style.css">
