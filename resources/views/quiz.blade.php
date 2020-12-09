<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Get title from child view --}}
    <title>Medžiagų varžos priklausomybė nuo temperatūros - tyrimas</title>

    {{-- Scripts --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    {{-- Style --}}
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap-theme.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/fontAwesome.css') }}>
    <link rel="stylesheet" href={{ asset('css/light-box.css') }}>
    <link rel="stylesheet" href={{ asset('css/owl-carousel.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo-style.css') }}>

    {{-- Scripts --}}
    <script src={{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}></script>
</head>

<body>
    <header class="nav-down responsive-nav hidden-lg hidden-md">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <div id="main-nav" class="collapse navbar-collapse">
            <nav>
                <ul class="nav navbar-nav">
                    <li><a href="/#top">Pradžia</a></li>
                    <li><a href="/#lab-work">Laboratorinis darbas</a></li>
                    <li><a href="/#theory">Teorija</a></li>
                    <li><a href="/#calc">Skaičiuoklė</a></li>
                    <li><a href="/#about">Komanda</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="sidebar-navigation hidde-sm hidden-xs">
        <nav>
            <ul>
                <li>
                    <a href="/#top">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Pradžia
                    </a>
                </li>
                <li>
                    <a href="/#lab-work">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Laboratorinis darbas
                    </a>
                </li>
                <li>
                    <a href="/#theory">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Teorija
                    </a>
                </li>
                <li>
                    <a href="/#calc">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Skaičiuoklė
                    </a>
                </li>
                <li>
                    <a href="/#about">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Komanda
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="page-content">
        <section class="content-section">
            <div class="section-heading">
                <h2><em>Išba</em>ndyk jėgas!</h2>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('message'))
                                <p style="color:green">{{ session('message') }}</p>
                                <form action="/postQuiz" method="POST">
                                    @csrf
                                    @for ($i = 0; $i < count($questions); $i++)
                                        <div class="col-md-6 pb-4">
                                            <div class="card">
                                                <div class="card-header">
                                                    <b>
                                                        <h4 class="text-left">{{ $questions[$i] }}</h4>
                                                    </b>
                                                </div>
                                                <div class="card-body">
                                                    @for ($j = 0; $j < count($answers[$i]); $j++)
                                                        @if ($answers[$i][$j] == old($i))
                                                            @if (old($i) == $correct[$i])
                                                                <input type="radio" class="float-left" id="{{ $answers[$i][$j] }}"
                                                                    name="{{ $i }}" value="{{ $answers[$i][$j] }}"
                                                                    checked disabled>
                                                                <label for="{{ $answers[$i][$j] }}"
                                                                    style="color: green">{{ $answers[$i][$j] }}</label><br>
                                                            @else
                                                                <input type="radio" class="float-left" id="{{ $answers[$i][$j] }}"
                                                                    name="{{ $i }}" value="{{ $answers[$i][$j] }}"
                                                                    checked disabled>
                                                                <label for="{{ $answers[$i][$j] }}"
                                                                    style="color: red">{{ $answers[$i][$j] }}</label><br>
                                                            @endif
                                                        @else
                                                            <input type="radio" class="float-left" id="{{ $answers[$i][$j] }}"
                                                                name="{{ $i }}" value="{{ $answers[$i][$j] }}" disabled>
                                                            <label
                                                                for="{{ $answers[$i][$j] }}">{{ $answers[$i][$j] }}</label><br>
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </form>
                                <a href="/" class="btn btn-info">Grįžti į pradinį</a>
                                <a href="/quiz" class="btn btn-primary">Bandyti testą dar kartą</a>
                        @else
                            <form action="/postQuiz" method="POST">
                                @csrf
                                @for ($i = 0; $i < count($questions); $i++)
                                    <div class="col-md-6 pb-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <b>
                                                    <h4 class="text-left">{{ $questions[$i] }}</h4>
                                                </b>
                                            </div>
                                            <div class="card-body">
                                                @for ($j = 0; $j < count($answers[$i]); $j++)
                                                    <input type="radio" class="float-left" id="{{ $answers[$i][$j] }}"
                                                        name="{{ $i }}" value="{{ $answers[$i][$j] }}" required>
                                                    <label
                                                        for="{{ $answers[$i][$j] }}">{{ $answers[$i][$j] }}</label><br>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                                <button type="submit" class="btn btn-primary">Pateikti</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
