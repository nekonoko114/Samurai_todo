<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()-getLocal()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token"content="{{ csrf_token }}" >
    <title>{{ config('app.name','Laravel') }}</title>
    <script scr="{{ mix('js/app.js }}" >defer</script>
    <link   rel="dns-prefetch" href="//font.gstatic.com">
    <link href="https://font.googleapis.com/css?family=Nunito" rel="stylesheet" >
</head>
<body>
    <div id="app">
        @component('components.header')
        @endcomponent

        @component('components,flash')
        @endcomponent

        <main>
            <div class="container-fruid h-100 p-2 d-flex flex-column">
                @yield('content')
            </div>
        </main>
        @compoment('components.footer')
        @endcomponent
    </div>
</body>
</html>
