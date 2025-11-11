import { fetchData } from '../core/api.js';
import { componentRenderers } from './registry.js';

export async function buildPage(containerId, pageConfigPath) {
    const container = document.getElementById(containerId);
    const pageConfig = await fetchData(pageConfigPath);

    if (!pageConfig || !pageConfig.components || !container) {
        if (container) container.innerHTML = "<p>Erro ao carregar config.</p>";
        return;
    }

    let finalHtml = '';
    for (const component of pageConfig.components) {
        const renderFn = componentRenderers[component.type];
        if (renderFn) {
            finalHtml += await renderFn(component);
        }
    }
    container.innerHTML = finalHtml;
}
