

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Recibo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h2 {
            margin: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Recibo de Compra</h2>
        </div>
        <table>
            <tr>
                <th>Código del Recibo</th>
                <td>{{ $receipt->id }}</td>
            </tr>
            <tr>
                <th>Fecha de la Compra</th>
                <td>{{ $receipt->date }}</td>
            </tr>
            <tr>
                <th>Precio Total</th>
                <td>{{ number_format($receipt->totalPrice, 2) }} $</td>
            </tr>
        </table>
    </div>
</body>
</html>