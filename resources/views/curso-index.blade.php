<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="/curso">Cursos</a></li>
        <li class="nav-item"><a class="nav-link" href="curso/create">Crear curso</a></li>
    </ul>
    <h1 class="text-center">Lista de Cursos</h1>
    <div class="row">
        <div class="col d-lg-flex justify-content-lg-center">
            <div class="table-responsive" style="width: 70%;border-color: var(--bs-emphasis-color);">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th style="background: var(--bs-primary);color: var(--bs-table-bg);">ID</th>
                            <th style="background: var(--bs-blue);color: var(--bs-table-bg);">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cursos->all() as $curso)
                            <tr>
                                <td>{{ $curso->id }}</td>
                                <td>{{ $curso->nombre }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>