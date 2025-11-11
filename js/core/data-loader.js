import { fetchData } from './api.js';

/**
 * Carrega e combina dados de múltiplas fontes (barrel files).
 * @param {string} barrelPath Caminho para o barrel file principal.
 * @param {string} itemPathPrefix Prefixo do caminho para os arquivos individuais.
 * @returns {Promise<Array>} Uma promessa que resolve para um array de itens de dados.
 */
async function loadAndCombine(barrelPath, itemPathPrefix = '') {
    const barrel = await fetchData(barrelPath);
    if (!barrel || !Array.isArray(barrel)) return [];
    
    const promises = barrel.map(file => fetchData(`${itemPathPrefix}${file}`));
    const items = await Promise.all(promises);
    return items.filter(item => item !== null);
}

/**
 * Carrega todos os dados da equipe, resolvendo as relações com funções e locais.
 * @returns {Promise<Array>} Uma promessa que resolve para um array de objetos de membro da equipe, com dados de função e localização aninhados.
 */
export async function loadRichTeamData() {
    const [teamMembers, roles, locations] = await Promise.all([
        loadAndCombine('team.json', 'team/'),
        loadAndCombine('roles.json', 'roles/'),
        loadAndCombine('locations.json', 'locations/')
    ]);

    // Cria mapas para busca rápida (O(1)) em vez de múltiplos loops (O(n)).
    const rolesMap = new Map(roles.map(role => [role.id, role]));
    const locationsMap = new Map(locations.map(loc => [loc.id, loc]));

    // Itera sobre cada membro da equipe para enriquecer seus dados.
    return teamMembers.map(member => {
        // Enriquecendo a biografia com os dados completos de localização
        if (member.biography?.birth?.locationId) {
            member.biography.birth.location = locationsMap.get(member.biography.birth.locationId) || null;
        }
        if (member.biography?.death?.locationId) {
            member.biography.death.location = locationsMap.get(member.biography.death.locationId) || null;
        }

        // Enriquecendo as funções gerais com os dados completos da função
        if (member.generalRoles) {
            member.generalRoles = member.generalRoles
                .map(roleId => rolesMap.get(roleId))
                .filter(Boolean); // Remove quaisquer funções não encontradas
        }
        
        // Enriquecendo as funções de projeto com os dados completos da função
        if (member.projectRoles) {
            for (const projectId in member.projectRoles) {
                const projectRoleInfo = member.projectRoles[projectId];
                if (projectRoleInfo.roles) {
                    projectRoleInfo.roles = projectRoleInfo.roles
                        .map(roleRef => ({
                            ...roleRef, // Mantém a descrição específica do projeto
                            ...rolesMap.get(roleRef.roleId) // Adiciona 'title' e 'description' da função
                        }))
                        .filter(role => role.title); // Garante que a função foi encontrada
                }
            }
        }
        
        return member;
    });
}
