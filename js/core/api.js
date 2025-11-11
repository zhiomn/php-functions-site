// Centraliza todas as chamadas para buscar nossos arquivos JSON.
export async function fetchData(fileName) {
  try {
    const response = await fetch(`/data/${fileName}`);
    if (!response.ok) {
      throw new Error(`Erro ao buscar ${fileName}: ${response.statusText}`);
    }
    return await response.json();
  } catch (error) {
    console.error(error);
    return null;
  }
}
