<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrateur</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        @include('admin.layouts.sidebar')
        <div class="main-content">
            @include('admin.layouts.navbar')
            <main>
                @yield('content')
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
