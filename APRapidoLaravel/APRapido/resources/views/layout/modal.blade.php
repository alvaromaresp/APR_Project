<!DOCTYPE html>
    <html lang="{{app()->getLocale() }}">
    <head>
        <title>{{config('app.name','APRápido')}}</title>
        <link rel="shortcut icon" type="image/x-icon" href="/img/icone.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{asset('js/app.js')}}"></script>

    </head>
    <body>
        @yield('content')
    </body>

</html>