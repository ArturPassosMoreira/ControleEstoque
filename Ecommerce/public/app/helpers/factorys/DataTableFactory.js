export class DataTableFactory {
    constructor() {
      this.table = null;
    }
  
    render(idTable, columns, rows) {
      this.table = new Tabulator(idTable, {
        data: rows,
        layout: 'fitColumns',
        pagination: 'local',
        paginationSize: 10,
        paginationSizeSelector: [10, 25, 50, 100],
        paginationCounter: 'rows',
        printAsHtml: true,
        movableRows: true,
        rowHeader: { headerSort: false, resizable: false, minWidth: 30, width: 30, rowHandle: true, formatter: 'handle' },
        printHeader: this.printHeader(),
        printFooter: this.printFooter(),
        columns: this.setColumns(columns),
      });
      this._setHeaderActions();
      Object.freeze(this);
    }
  
    setColumns(columns) {
      const columnsMap = columns.map(column => ({
        title: column.toUpperCase(),
        field: column,
        hozAlign: 'center',
        headerFilter: true,
      }));
      columnsMap.push({
        formatter: this.editIcon,
        width: 30,
        hozAlign: 'center',
        cellClick: function (e, cell) {
          alert('Printing row data for: ' + cell.getRow().getData().id);
        },
      });
      columnsMap.push({
        formatter: this.deleteIcon,
        width: 30,
        hozAlign: 'center',
        cellClick: function (e, cell) {
          alert('Printing row data for: ' + cell.getRow().getData().id);
        },
      });
      return columnsMap;
    }
  
    printHeader() {
      return `<div style="display: flex">
                <img src="../logo.png"/>
                <h2>Utopia</h2>
              <div>`;
    }
  
    printFooter() {
      return '<p>mochilasutopia@gmail.com<p>';
    }
  
    editIcon() {
      return '<i class="fa fa-edit"></i>';
    }
  
    deleteIcon() {
      return '<i class="fa fa-trash" style="color:red"></i>';
    }
  
    printTable() {
      this.table.print(false, true);
    }
  
    downloadCSV() {
      this.table.download('csv', 'data.csv');
    }
  
    downloadJSON() {
      this.table.download('json', 'data.json');
    }
  
    downloadXLSX() {
      this.table.download('xlsx', 'data.xlsx', { sheetName: 'My Data' });
    }
  
    downloadPDF() {
      this.table.download('pdf', 'data.pdf', {
        orientation: 'portrait',
        title: 'Example Report',
      });
    }
  
    _setHeaderActions() {
      const tableControl = document.createElement('div');
      tableControl.className = 'table-controls';
      tableControl.innerHTML = `
       
        <div>
          <button class="btn-shadow btn btn-info" id="download-csv" title="CSV"><i class="fa fa-file-text"></i></button>
          <button class="btn-shadow btn btn-info" id="download-json" title="JSON"><i class="fa fa-file-code-o"></i></button>
          <button class="btn-shadow btn btn-info" id="download-xlsx" title="EXCEL"><i class="fa fa-file-excel-o"></i></button>
          <button class="btn-shadow btn btn-info" id="download-pdf" title="PDF"><i class="fa fa-file-pdf-o"></i></button>
          <button class="btn-shadow btn btn-info" id="print-table" title="IMPRIMIR"><i class="fa fa-print"></i></button>
        </div>`;
  
      document.querySelector('#content-table').prepend(tableControl);
    }
  }
  