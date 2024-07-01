import { ProdutoController } from '../controllers/ProdutoController.js';
import { DataTableFactory } from '../helpers/factorys/DataTableFactory.js';

const produtoController = new ProdutoController();
const dataTableFactory = new DataTableFactory();

const columns = ['nome', 'tipo', 'personagem', 'quantidade', 'tamanho', 'reparticoes'];

const response = await produtoController.listarProdutos();

dataTableFactory.render('#example-table', columns, response.data);

document.getElementById('print-table').addEventListener('click', () => {
  dataTableFactory.printTable();
});

document.getElementById('download-csv').addEventListener('click', () => {
  dataTableFactory.downloadCSV();
});

document.getElementById('download-json').addEventListener('click', () => {
  dataTableFactory.downloadJSON();
});

document.getElementById('download-xlsx').addEventListener('click', () => {
  dataTableFactory.downloadXLSX();
});

document.getElementById('download-pdf').addEventListener('click', () => {
  dataTableFactory.downloadPDF();
});
