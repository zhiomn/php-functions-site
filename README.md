### **O Framework "Ekkentros": Uma Visão Geral**

O sistema que construímos pode ser descrito como um **framework PHP híbrido, ultra-leve e de arquitetura atômica, com renderização no servidor (SSR) e aprimoramento progressivo no cliente (Progressive Enhancement)**. Ele foi projetado para máxima performance, simplicidade de manutenção e total controle sobre o código.

**Pilares Fundamentais:**

1.  **Fonte de Dados: Flat-File CMS**
    *   Toda a informação do site reside em arquivos `.json` estruturados no diretório `/data`. Não há banco de dados, o que elimina uma camada de complexidade e torna o projeto extremamente portátil.

2.  **Lógica de Dados: Camada de Serviço PHP**
    *   A pasta `php/data_services/` atua como a camada de lógica de negócio. Ela é responsável por carregar os dados brutos dos arquivos `.json` e "enriquecê-los", resolvendo as relações entre eles (ex: substituir um `locationId` pelo objeto completo da localização).

3.  **Motor de Renderização: Componentes Atômicos em PHP**
    *   A pasta `templates/components/` funciona como nosso motor de UI. Usando a função `render_component()`, construímos a interface de forma hierárquica (átomos, moléculas, organismos), garantindo reutilização e consistência. A renderização é feita no servidor, entregando HTML puro e otimizado para o navegador.

4.  **Interatividade: Vanilla JavaScript**
    *   A pasta `js/` contém JavaScript modular e sem dependências. Sua função não é construir a página inteira, mas sim "aprimorá-la" após o carregamento, adicionando interatividade (como os modais de projeto) ou carregando dinamicamente grades de conteúdo (como na página `sobre.php`).

### **Comparação com Frameworks de Mercado**

| Característica | **Framework Ekkentros** | **Statamic / Kirby (Flat-File CMS)** | **WordPress (CMS Tradicional)** | **Next.js / Nuxt.js (Meta-Frameworks JS)** |
| :--- | :--- | :--- | :--- | :--- |
| **Fonte de Dados** | **Flat-File (JSON)** | **Flat-File (YAML/Markdown)** | **Banco de Dados (MySQL)** | Agnóstico (API, DB, Flat-File) |
| **Linguagem Principal** | **PHP (Backend)**, JS (Frontend) | PHP (Backend) | PHP (Backend) | **JavaScript / TypeScript (Full-Stack)** |
| **Modelo de Renderização**| **SSR-First**, com CSR para partes dinâmicas | SSR-First | SSR-First | Híbrido (SSR, SSG, CSR) |
| **Templating** | **Componentes PHP Nativos** | Twig / Blade (motores de template) | O "Loop" do WordPress, blocos | Componentes React / Vue |
| **Complexidade e Curva de Aprendizagem** | **Muito Baixa**. Código explícito e direto. | Baixa a Média. Possuem um painel de admin completo. | Média a Alta (devido ao ecossistema de plugins).| **Muito Alta**. Requer ecossistema Node.js. |
| **Caso de Uso Ideal** | Portfólios, sites institucionais pequenos e blogs onde a performance e simplicidade são críticas. | Sites de conteúdo de pequeno a grande porte que precisam de um painel de admin flexível sem a sobrecarga de um banco de dados. | Quase tudo, de blogs a e-commerce, com um vasto ecossistema de plugins prontos. | Aplicações web complexas, SPAs, e sites onde a interatividade do lado do cliente é a prioridade. |
