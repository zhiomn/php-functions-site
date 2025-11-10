<?php
/**
 * Resolve um ID de localização dentro de um array de dados,
 * adicionando o objeto de localização completo.
 *
 * @param array &$target O array a ser modificado (passado por referência).
 * @param string $sourceKey A chave que contém o ID da localização (ex: 'locationId').
 * @param array $locationsMap O mapa de todas as localizações disponíveis.
 * @return void
 */
function resolveLocation(&$target, $sourceKey, $locationsMap) {
    if (isset($target[$sourceKey])) {
        $newKey = str_replace('Id', '', $sourceKey);
        $target[$newKey] = $locationsMap[$target[$sourceKey]] ?? null;
    }
}
