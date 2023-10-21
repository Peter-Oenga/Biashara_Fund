document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('exportCSV').addEventListener('click', function () {
        exportTableToCSV();
    });

    function exportTableToCSV() {
        var table = document.querySelector('table');
        var rows = table.querySelectorAll('tr');
        var csvContent = [];

        for (var i = 0; i < rows.length; i++) {
            var row = [];
            var cols = rows[i].querySelectorAll('td, th');

            for (var j = 0; j < cols.length; j++) {
                row.push(cols[j].textContent);
            }

            csvContent.push(row.join(','));
        }

        var csv = csvContent.join('\n');
        var blob = new Blob([csv], { type: 'text/csv' });
        var link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'table_data.csv';
        link.click();
    }

    document.getElementById('exportJSON').addEventListener('click', function () {
        exportTableToJSON();
    });

    function exportTableToJSON() {
        var table = document.querySelector('table');
        var rows = table.querySelectorAll('tr');
        var jsonData = [];

        for (var i = 1; i < rows.length; i++) {
            var row = rows[i];
            var cols = row.querySelectorAll('td, th');
            var rowObject = {};

            for (var j = 0; j < cols.length; j++) {
                var cell = cols[j];
                var header = table.rows[0].cells[j].textContent;
                rowObject[header] = cell.textContent;
            }

            jsonData.push(rowObject);
        }

        var jsonContent = JSON.stringify(jsonData, null, 2);
        var blob = new Blob([jsonContent], { type: 'application/json' });
        var link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'table_data.json';
        link.click();
    }
});
