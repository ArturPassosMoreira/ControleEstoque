export class VeiculoService {
    constructor() {}
  
    async listar() {
      const response = await fetch('/app/database/veiculos.json');
      const result = await response.json();
      return result;
    }
  
    incluir(veiculo) {}
  }
  