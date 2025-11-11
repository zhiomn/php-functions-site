import { fetchData } from '../core/api.js';

/** Helper para renderizar uma lista simples de dados (ex: serviços) */
export async function renderSimpleList(dataPath, rendererFn, title) {
  const data = await fetchData(dataPath);
  if (!data || data.length === 0) return '';
  return `<h2>${title}</h2>${data.map(rendererFn).join('')}`;
}
