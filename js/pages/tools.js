import { createToolSummaryCard } from '../renderer/tool.renderer.js';

export async function init() {
    const container = document.getElementById('tools-grid-container');
    if (!container) return;

    try {
        const response = await fetch('/api/get_tools_data.php');
        if (!response.ok) throw new Error('Failed to fetch tools data');
        
        const toolsData = await response.json();
        
        if (!toolsData || toolsData.length === 0) {
            container.innerHTML = '<p>Nenhuma ferramenta encontrada.</p>';
            return;
        }

        const cardsHtml = toolsData.map(createToolSummaryCard).join('');
        container.innerHTML = cardsHtml;

    } catch (error) {
        console.error("Error initializing tools page:", error);
        container.innerHTML = '<p>Ocorreu um erro ao carregar as ferramentas.</p>';
    }
}
