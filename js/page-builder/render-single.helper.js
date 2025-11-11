import { fetchData } from '../core/api.js';

/** Helper para renderizar um único objeto de dados (ex: contato) */
export async function renderSingle(dataPath, rendererFn, title) {
  const data = await fetchData(dataPath);
  if (!data) return '';
  return `<h2>${title}</h2>${rendererFn(data)}`;
}
