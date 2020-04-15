<!DOCTYPE html>
<html>
<head>
    <title> @yield('title','Aprendible')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <link rel="stylesheet" href="{{mix('css/app.css')}}">--}}
    <link rel="stylesheet" href="/css/app.css">
    <script src="{{mix('js/app.js')}}"></script>
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
        @include('partials.new')
        @include('partials.session-status')
        </header>
        <main class="py-4">
        @yield("content")<!--directiva  recibe un parametro apra diferenciarla se puede usar varios yields-->
        </main>
        <footer class="bg-white text-black-50 py-30 shadow text-center ">{{config('app.name')}}| Copyright @ {{date('Y')}}</footer>
    </div>
</body>

</html>

