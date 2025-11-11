/**
 * Cria o esqueleto HTML de um card.
 * @param {string} innerContent - O HTML que será colocado dentro do card.
 * @param {string} link - URL opcional para envolver o card.
 * @returns {string} O HTML completo do card.
 */
export function createCard({ innerContent, link }) {
  const cardHTML = `<div class="card">${innerContent}</div>`;
  if (link) {
    return `<a href="${link}" class="card-link">${cardHTML}</a>`;
  }
  return cardHTML;
}
