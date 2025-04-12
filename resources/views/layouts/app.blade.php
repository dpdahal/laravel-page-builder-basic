<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Page Builder')</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .container { max-width: 800px; margin: auto; }
        .block { border: 1px solid #ccc; padding: 10px; margin: 10px 0; }
    </style>
    @stack('styles')
</head>
<body>
    <div class="container">
        <h1>@yield('header', 'Laravel Page Builder')</h1>
        @yield('content')
    </div>

    @stack('scripts')
</body>
</html>
