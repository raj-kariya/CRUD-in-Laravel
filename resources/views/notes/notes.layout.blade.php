<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Notes') - {{ config('app.name', 'Laravel') }}</title>
    
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="py-3">
            <h1>Notes Application</h1>
            <nav>
                <a href="{{ route('notes.index') }}" class="btn btn-primary">All Notes</a>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="mt-5 text-center">
            <p>&copy; {{ date('Y') }} My Notes App</p>
        </footer>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>