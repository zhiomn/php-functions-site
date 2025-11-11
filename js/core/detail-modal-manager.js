import { fetchData } from './api.js';

function createDetailModalManager() {
    const modalElement = document.getElementById('detail-modal');
    const modalBody = document.getElementById('detail-modal-body');
    
    if (!modalElement || !modalBody) {
        return { init: () => {} };
    }
    
    const closeButton = modalElement.querySelector('.close-button');
    
    const show = () => modalElement.classList.remove('hidden');
    const hide = () => modalElement.classList.add('hidden');

    async function open(type, id) {
        modalBody.innerHTML = '<p>Carregando...</p>';
        show();
        let apiUrl = '';

        if (type === 'project') {
            apiUrl = `/api/get_project_html.php?id=${id}`;
        } else {
            // Team type is now handled by page navigation, but we keep this as a fallback.
            modalBody.innerHTML = '<p>Erro: Tipo de conteúdo não suportado para modal.</p>';
            return;
        }
        
        try {
            const response = await fetch(apiUrl);
            if (!response.ok) {
                throw new Error(`Server responded with status: ${response.status}`);
            }
            modalBody.innerHTML = await response.text();
        } catch (error) {
            console.error(`Failed to load HTML for type '${type}':`, error);
            modalBody.innerHTML = '<p>Erro ao carregar os detalhes.</p>';
        }
    }

    function init() {
        closeButton.addEventListener('click', hide);
        modalElement.addEventListener('click', (event) => {
            if (event.target === modalElement) {
                hide();
            }
        });

        document.body.addEventListener('click', (event) => {
            const trigger = event.target.closest('.detail-trigger');
            if (trigger) {
                const { type, id } = trigger.dataset;

                // If the link is for a team member, do nothing.
                // Let the browser handle the standard link navigation to membro.php
                if (type === 'team') {
                    return;
                }

                // For all other types (like 'project'), prevent the default link behavior
                // and open the modal instead.
                event.preventDefault();
                
                if (id) {
                    open(type, id);
                }
            }
        });
    }

    return { init };
}

export const detailModalManager = createDetailModalManager();
