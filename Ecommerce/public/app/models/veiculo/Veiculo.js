export class Veiculo {
    constructor(id, cor, modelo, ano, combustivel) {
      this.id = id;
      this.cor = cor;
      this.modelo = modelo;
      this.ano = ano;
      this.combustivel = combustivel;
      Object.freeze();
    }
  
    _buzinar(som) {
      console.log(som);
    }
  }
  