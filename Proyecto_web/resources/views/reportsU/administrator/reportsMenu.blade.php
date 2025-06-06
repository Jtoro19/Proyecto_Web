<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reportes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    @include('partials.topheaderManage')


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="container bg-gray rounded p-4">
                    <h2 class="text-center mb-4">Reportes</h2>
                    <div class="d-flex flex-column align-items-stretch">
                        <a href="{{ route('reportsU.administrator.monthNewUsersPDF') }}" class="btn btn-custom mb-3">Reportes de nuevos usuarios (mes)</a>
                        <a href="{{route ('reportsU.administrator.yearNewUsersPDF')}}" class="btn btn-custom mb-3">Reportes de nuevos usuarios (año)</a>
                        <a href="{{ route('reportsU.administrator.graph') }}" class="btn btn-custom mb-3">Gráfica de nuevos usuarios (año)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>