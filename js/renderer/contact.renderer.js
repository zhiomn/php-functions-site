export function createContactDetails(contact) {
  return `
    <p><strong>Email:</strong> ${contact.email}</p>
    <p><strong>Telefone:</strong> ${contact.phone}</p>
    <p><strong>Endereço:</strong> ${contact.address}</p>
    <p>
      <a href="${contact.social.twitter}" target="_blank">Twitter</a> | 
      <a href="${contact.social.instagram}" target="_blank">Instagram</a>
    </p>
  `;
}
