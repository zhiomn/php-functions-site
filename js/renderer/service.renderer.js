export function createServiceItem(service) {
  return `
    <div class="service-item">
      <h3>${service.title}</h3>
      <p>${service.description}</p>
    </div>
  `;
}
