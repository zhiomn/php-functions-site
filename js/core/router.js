import { init as initPortfolio } from '../pages/portfolio.js';
import { init as initAbout } from '../pages/about.js';
import { init as initContact } from '../pages/contact.js';
import { init as initTools } from '../pages/tools.js';

const routes = {
  'portfolio-page': initPortfolio,
  'about-page': initAbout,
  'contact-page': initContact,
  'tools-page': initTools,
};

export function initRouter() {
  for (const id in routes) {
    if (document.getElementById(id)) {
      routes[id]();
      break;
    }
  }
}
