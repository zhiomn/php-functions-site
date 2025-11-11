export function createProjectCard(project) {
  let releaseInfo = '';
  if (project.releases && project.releases.length > 0) {
    const latestRelease = project.releases[project.releases.length - 1];
    const releaseDate = new Date(latestRelease.date).toLocaleDateString('pt-BR', { year: 'numeric', month: 'long', day: 'numeric', timeZone: 'UTC' });
    releaseInfo = `<p class="card-release-date">Lançamento: ${releaseDate}</p>`;
  }

  const tagsHtml = (project.tags || [])
    .map(tag => `<span class="tag">${tag}</span>`)
    .join(' ');

  const innerContent = `
    <img src="${project.imagePath}" alt="${project.imageAlt}">
    <div class="card-content">
        <h3>${project.title}</h3>
        <p>${project.description}</p>
        <div class="card-tags">${tagsHtml}</div>
        ${releaseInfo}
        <span class="view-more-prompt">Ver mais</span>
    </div>
  `;

  const cardHtml = `<div class="card">${innerContent}</div>`;
  
  return `
    <a href="/projeto.php?id=${project.id}" class="card-link detail-trigger" data-type="project" data-id="${project.id}">
      ${cardHtml}
    </a>
  `;
}
