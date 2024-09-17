document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('usersChart').getContext('2d');
    var chartLabels = JSON.parse(document.getElementById('chart-labels').textContent);
    var chartData = JSON.parse(document.getElementById('chart-data').textContent);

    // Crear el histograma con Chart.js (gráfico de barras)
    var usersChart = new Chart(ctx, {
        type: 'bar', // Gráfico de barras para representar el histograma
        data: {
            labels: chartLabels,
            datasets: [{
                label: 'Nuevos Usuarios',
                data: chartData,
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                x: { // Eje X con etiquetas de meses
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Meses'
                    }
                },
                y: { // Eje Y para contar los nuevos usuarios
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Número de Nuevos Usuarios'
                    }
                }
            }
        }
    });

    // Función para convertir el gráfico a imagen base64
    function getChartBase64() {
        return document.getElementById('usersChart').toDataURL('image/png');
    }

    // Escuchar el botón para descargar el PDF
    document.getElementById('downloadPdfButton').addEventListener('click', function () {
        // Convertir el gráfico a base64
        var chartImage = getChartBase64();

        // Enviar el gráfico como imagen base64 al servidor
        fetch('/send-chart-pdf', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ chart: chartImage })
        })
        .then(response => response.blob())
        .then(blob => {
            // Crear una URL de descarga para el PDF
            var url = window.URL.createObjectURL(blob);
            var a = document.createElement('a');
            a.href = url;
            a.download = 'users_report.pdf';
            document.body.appendChild(a);
            a.click();
            a.remove();
        })
        .catch(error => console.error('Error al generar el PDF:', error));
    });
});

