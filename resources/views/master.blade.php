<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <title>Sistema Alunos</title>
    <link rel="stylesheet" href='{{ asset("css/style.css") }}'>
</head>

<body>
    <h2 class="masterheader">Sistema de matrículas - Escola BlaBlaBla</h2>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>