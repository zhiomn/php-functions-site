import { initRouter } from './core/router.js';
import { detailModalManager } from './core/detail-modal-manager.js';

// Garante que o DOM esteja totalmente carregado
document.addEventListener('DOMContentLoaded', () => {
    // Inicializa o roteador que constrói as páginas
    initRouter();
    // Inicializa os listeners do modal através da sua interface pública
    detailModalManager.init();
});
