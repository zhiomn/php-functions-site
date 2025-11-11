import * as Renderers from '../renderer.js';
import { renderGrid, renderSingle, renderSimpleList } from './helpers.js';

// Mapeia os 'types' do JSON para as funções de renderização
export const componentRenderers = {
  text: (component) => Renderers.createTextBlock(component.content),
  projectGrid: (component) => renderGrid(component.source, 'projects/', Renderers.createProjectCard),
  teamGrid: (component) => renderGrid(component.source, 'team/', Renderers.createTeamMemberCard),
  contactDetails: (component) => renderSingle(component.source, Renderers.createContactDetails, component.title),
  serviceList: (component) => renderSimpleList(component.source, Renderers.createServiceItem, component.title)
};
