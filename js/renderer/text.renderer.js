/**
 * Cria um bloco de parágrafo padrão.
 * @param {string} text - O conteúdo do parágrafo.
 * @returns {string} O HTML do parágrafo.
 */
export function createTextBlock(text) {
  return `<p class="page-intro">${text}</p>`;
}
