import { VeiculoController } from '../controllers/VeiculoController.js';
import { DataTableFactory } from '../helpers/factorys/DataTableFactory.js';

const veiculoController = new VeiculoController();
const dataTableFactory = new DataTableFactory();

const columns = ['modelo', 'ano', 'cor', 'combustivel'];

const response = await veiculoController.listarVeiculos();

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
