export function createTeamSummaryCard(member) {
  const imagePath = member.imageUrlPath || '/assets/img/placeholder.png';
  const imageAlt = `Retrato de ${member.name}`;

  const rolesHtml = (member.generalRoles || [])
    .map(role => `<span class="role-tag">${role.title}</span>`)
    .join(' ');

  const innerContent = `
    <img src="${imagePath}" alt="${imageAlt}" class="card-image">
    <div class="card-content">
        <h3>${member.name}</h3>
        <div class="card-roles">${rolesHtml}</div>
        <p class="summary-bio">${member.bio}</p>
        <span class="view-more-prompt">Ver Perfil Completo</span>
    </div>
  `;

  const cardHtml = `<div class="card team-summary-card">${innerContent}</div>`;
  
  return `
    <a href="/membro.php?id=${member.id}" class="card-link">
      ${cardHtml}
    </a>
  `;
}
