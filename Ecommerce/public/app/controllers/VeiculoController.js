import { Veiculo } from '../models/veiculo/Veiculo.js';
import { VeiculoService } from '../services/VeiculoService.js';

export class VeiculoController {
  constructor() {
    this._veiculoService = new VeiculoService();
  }

  async listarVeiculos() {
    try {
      return await this._veiculoService.listar();
    } catch (error) {
      throw new Error('Falha ao tentar listar veiculos');
    }
  }

  criarVeiculo() {
    this._veiculoService.incluir(new Veiculo(1, 'Branco', 'Polo Sedan', 2024, 'Gasolina'));
  }
}
