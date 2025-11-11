import { createTeamSummaryCard } from '../renderer/team.renderer.js';

export async function init() {
  const container = document.getElementById('about-page');
  if (!container) return;

  container.innerHTML = '<p>Carregando equipe...</p>';

  try {
    const response = await fetch('/api/get_team_data.php');
    if (!response.ok) {
        throw new Error(`Failed to fetch team data with status: ${response.status}`);
    }
    const teamData = await response.json();
    
    if (!teamData || teamData.length === 0) {
      container.innerHTML = '<p>Nenhuma informação da equipe encontrada.</p>';
      return;
    }

    const cardsHtml = teamData.map(createTeamSummaryCard).join('');
    container.innerHTML = `<div class="grid-container">${cardsHtml}</div>`;
    
  } catch (error) {
    console.error('Falha ao inicializar a página Sobre Nós:', error);
    container.innerHTML = '<p>Ocorreu um erro ao carregar os dados da equipe.</p>';
  }
}
