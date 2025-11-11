import { fetchData } from '../core/api.js';

/** Helper para renderizar grids a partir de um barrel file (ex: projetos, equipe) */
export async function renderGrid(barrelPath, itemPathPrefix, rendererFn) {
  const files = await fetchData(barrelPath);
  if (!files || files.length === 0) return '';

  const promises = files.map(file => fetchData(`${itemPathPrefix}${file}`));
  const items = await Promise.all(promises);
  const validItems = items.filter(item => item !== null);
  
  return `<div class="grid-container">${validItems.map(rendererFn).join('')}</div>`;
}
