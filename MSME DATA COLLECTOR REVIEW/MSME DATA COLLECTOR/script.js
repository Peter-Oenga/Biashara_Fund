$(document).ready(function() {
  $('#disability_specification').hide();
  
  $('#disability').on('change', function() {
    if ($(this).val() === 'yes') {
      $('#disability_specification').show();
    } else {
      $('#disability_specification').hide();
    }
  });
});

$(document).ready(function(){
    $('.sect-b').hide();
    $('.sect-c').hide();
    
    $('#open-sect-b').on('click', function(){
        $('.sect-b').show();
        $('.sect-a').hide();
    })

    $('#open-sect-c').on('click', function(){
        $('.sect-c').show();
        $('.sect-a').hide();
        $('.sect-b').hide();
    })
});

$(document).ready(function() {
    $('#form').submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
          url: 'process.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log("Response received:", response);

                try {
                    var responseObject = JSON.parse(response);
                    if (typeof responseObject === 'object' && 'success' in responseObject) {
                      if (responseObject.success) {
                            alert('Your response has been submitted successfully!');
                        } else {
                            alert(responseObject.message || 'There was an error submitting your response. Please try again later.');
                        }
                    } 
                } catch (e) {
                    console.error("Error parsing JSON response:", e);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX request error:", status, error); // Log the error for debugging
            }
        });
    });
});

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
