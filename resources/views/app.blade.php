<html lang="{{ app()->getLocale() }}">
@include('partials.head')
<body>
    <div id="app">
    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>
</html>
