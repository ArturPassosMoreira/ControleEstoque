export class ProdutoService {
    constructor() {}
  
    async listar() {
      const response = await fetch('produtos/listar');
      const result = await response.json();
      return result;
    }
  
    incluir(produto) {}
  }
  