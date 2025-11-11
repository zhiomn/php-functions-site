export function createToolSummaryCard(tool) {
    const imageHtml = tool.imagePath
        ? `<img src="${tool.imagePath}" alt="Logo de ${tool.title}" class="card-image tool-card-image">`
        : '<div class="card-image-placeholder"></div>';

    const innerContent = `
        ${imageHtml}
        <div class="card-content">
            <h3>${tool.title}</h3>
            <span class="role-tag">${tool.type}</span>
            <p>${tool.description}</p>
            <span class="view-more-prompt">Ver Detalhes</span>
        </div>
    `;

    const cardHtml = `<div class="card tool-summary-card">${innerContent}</div>`;
    
    return `<a href="/ferramenta.php?id=${tool.id}" class="card-link">${cardHtml}</a>`;
}
