import { fetchData } from '../core.js';
import { createMemberDetail } from '../renderer.js';

/**
 * Inicializa a página de detalhe do membro da equipe.
 */
export async function init() {
  const container = document.getElementById('member-content');
  const params = new URLSearchParams(window.location.search);
  const memberId = params.get('id');

  if (!memberId) {
    container.innerHTML = '<p>ID do membro não encontrado.</p>';
    return;
  }

  const memberData = await fetchData(`team/${memberId}.json`);

  if (memberData && container) {
    container.innerHTML = createMemberDetail(memberData);
  } else if (container) {
    container.innerHTML = '<p>Perfil não encontrado.</p>';
  }
}
