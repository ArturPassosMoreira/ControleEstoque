export class Produto {
    constructor(produtoNome, produtoTipo, produtoPersonagem, quantidade, tamanho, reparticoes) {
        this._produtoNome = produtoNome
		this._produtoTipo = produtoTipo
		this._produtoPersonagem = produtoPersonagem
		this._quantidade = quantidade
		this._tamanho = tamanho
		this._reparticoes = reparticoes
        Object.freeze(this)
    }
}