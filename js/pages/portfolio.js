import { buildPage } from '../core.js';
import { createProjectCard } from '../renderer/project.renderer.js';

export async function init() {
  const container = document.getElementById('portfolio-page');
  if (!container) return;

  // 1. Render the static parts of the page (like the intro text)
  await buildPage('portfolio-page', 'pages/portfolio.json');

  // 2. Create and append a dedicated container for the dynamic grid
  const gridContainer = document.createElement('div');
  gridContainer.className = 'grid-container';
  gridContainer.innerHTML = '<p>Carregando projetos...</p>';
  container.appendChild(gridContainer);
  
  // 3. Fetch data from the API and render the dynamic grid
  try {
    const response = await fetch('/api/get_portfolio_data.php');
    if (!response.ok) throw new Error('Failed to fetch portfolio data');

    const projectsData = await response.json();

    if (!projectsData || projectsData.length === 0) {
      gridContainer.innerHTML = '<p>Nenhum projeto encontrado.</p>';
      return;
    }

    const cardsHtml = projectsData.map(createProjectCard).join('');
    gridContainer.innerHTML = cardsHtml;

  } catch (error) {
    console.error("Error initializing portfolio grid:", error);
    gridContainer.innerHTML = '<p>Ocorreu um erro ao carregar os projetos.</p>';
  }
}
