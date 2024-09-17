<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Reporte de Usuarios</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <h2>Histograma de Nuevos Usuarios por Mes</h2>
        
        <!-- Lienzo para el gráfico -->
        <canvas id="usersChart" width="400" height="200"></canvas>

        <!-- Pasar etiquetas y datos desde Laravel a la vista -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var ctx = document.getElementById('usersChart').getContext('2d');
                
                // Las etiquetas (meses) y los datos (número de nuevos usuarios) son pasados desde el backend
                var chartLabels = @json($chartLabels);
                var chartData = @json($chartData);

                // Crear el histograma
                var usersChart = new Chart(ctx, {
                    type: 'bar',  // Histograma (gráfico de barras)
                    data: {
                        labels: chartLabels,  // Meses
                        datasets: [{
                            label: 'Nuevos Usuarios',
                            data: chartData,  // Número de nuevos usuarios
                            backgroundColor: 'rgba(54, 162, 235, 0.6)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            x: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Meses'
                                }
                            },
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Número de Nuevos Usuarios'
                                }
                            }
                        }
                    }
                });
            });
        </script>
    </div>
</body>
</html>
