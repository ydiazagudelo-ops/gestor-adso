<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title','Gestor ADSO')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CDN de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { max-width: 980px; margin: 24px auto; font-family: system-ui; }
        nav a { margin-right: 12px; }
        .flash { background: #e6ffed; padding: 8px; border-radius: 8px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <nav class="mb-3">
        <a href="/aprendices" class="text-decoration-none fw-bold">Aprendices</a>
    </nav>

    @if(session('ok'))<div class="flash">{{ session('ok') }}</div>@endif

    @yield('content')
</body>
</html>