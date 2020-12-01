<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Get title from child view --}}
        <title>Medžiagų varžos priklausomybė nuo temperatūros - tyrimas</title>

        {{-- Scripts --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        {{-- Style --}}
        <link href = {{ asset("css/app.css") }} rel="stylesheet" />
        <link href = {{ asset("css/bootstrap.css") }} rel="stylesheet" />
    </head>
    <body class="antialiased">
        <div class="container-fluid">
            
        </div>
    </body>
</html>