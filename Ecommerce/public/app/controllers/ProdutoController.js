import { Produto } from '../models/produto/Produto.js';
import { ProdutoService } from '../services/ProdutoService.js';

export class ProdutoController {
  constructor() {
    this._produtoService = new ProdutoService();
  }

  async listarProdutos() {
    try {
      return await this._produtoService.listar();
    } catch (error) {
      throw new Error('Falha ao tentar listar produtos');
    }
  }

  criarProduto() {
    this._produtoService.incluir(new Produto(1, 'Branco', 'Polo Sedan', 2024, 'Gasolina'));
  }
}
