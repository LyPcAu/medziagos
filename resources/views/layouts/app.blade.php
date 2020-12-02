<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Get title from child view --}}
        @yield('title')

        {{-- Scripts --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>


        {{-- Style --}}
        <link href = {{ asset("css/app.css") }} rel="stylesheet" />
        <link href = {{ asset("css/bootstrap.css") }} rel="stylesheet" />
    </head>
    <body class="antialiased">
        {{-- Include header i.e. title, menu --}}
        @include('layouts.header')

        <div class="container-fluid">
            {{-- Insert content from child views --}}
            @yield('content')
        </div>

        {{-- Include footer --}}
        @include('layouts.footer')
    </body>
</html>
