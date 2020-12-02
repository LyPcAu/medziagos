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
                    <li><a href="#top">Pradžia</a></li>
                    <li><a href="#lab-work">Laboratorinis darbas</a></li>
                    <li><a href="#theory">Teorija</a></li>
                    <li><a href="#calc">Skaičiuoklė</a></li>
                    <li><a href="#about">Komanda</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="sidebar-navigation hidde-sm hidden-xs">
        <nav>
            <ul>
                <li>
                    <a href="#top">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Pradžia
                    </a>
                </li>
                <li>
                    <a href="#lab-work">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Laboratorinis darbas
                    </a>
                </li>
                <li>
                    <a href="#theory">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Teorija
                    </a>
                </li>
                <li>
                    <a href="#calc">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Skaičiuoklė
                    </a>
                </li>
                <li>
                    <a href="#about">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Komanda
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="slider">
        <div class="Modern-Slider content-section" id="top">
            <div class="item item-1">
                <div class="img-fill">
                    <div class="image"></div>
                    <div class="info">
                        <div>
                            <h1>Tyrimas</h1>
                            <h1>Medžiagų varžos priklausomybė<br>nuo temperatūros</h1><br>
                            <div class="white-button button">
                                <a href="#lab-work">Apie laboratorinį darbą</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <section id="theory" class="content-section">
            <div class="section-heading">
                <h2><em>Teor</em>ija</h2>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 border">

                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="page-content">
        <section id="calc" class="content-section">
            <div class="section-heading">
                <h2><em>Skai</em>čiuoklė</h2>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Laido rezistencijos skaičiuoklė</h2>
                        <div class="mt-2">
                            <form method="POST" action="/process-graph">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="pb-2">
                                            <div class="form-group">
                                                <label for="material" class="form-label">Pasirinkite medžiagą:&nbsp;</label>
                                                <select name="material" id="material" class="form-control-range">
                                                    <option value="copper">Varis</option>
                                                    <option value="aluminum">Aliuminis</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="temp_coef">Nustatytas temperatūros
                                                    koeficientas
                                                    (°C<sup>-1</sup>):</label>
                                                <input class="form-control-range" id="temp_coef" name="temp_coef" type="text"
                                                    disabled value="{{ $temperature_coef ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="resist_at">Nustatytas rezistencijos
                                                koeficientas<br> 20°C
                                                temperatūroje (Ω mm<sup>2</sup> / m):</label>
                                            <input class="form-control-range" id="resist_at" name="resist_at" type="text"
                                                disabled value="{{ $resistivity_coef ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="pb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="input_wire_area">Įveskite laido
                                                    skerspjūvio
                                                    plotą
                                                    (mm<sup>2</sup>):</label>
                                                <input class="form-control-range" id="input_wire_area" name="input_wire_area"
                                                    type="text">
                                            </div>
                                        </div>
                                        <div class="pb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="input_temp">Įveskite temperatūrą
                                                    (°C):</label>
                                                <input class="form-control-range" id="input_temp" name="input_temp"
                                                    type="text">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" name="create" class="btn btn-custom">SUDARYTI
                                                GRAFIKĄ</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
        <section id="about" class="content-section last-section">
            <div class="section-heading">
                <h2><em>Koma</em>nda</h2>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6 border">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title">Sveiki draugai!</h2>
                                <p class="text-justify content">
                                    Esame linksmi, jauni ir gražūs vyrukai, sėkmnigai
                                    žengiantys bakalauro studijų keliu. Kelio liko nedaug,
                                    paskutinis kursas spaudžia baigiamuoju darbu.
                                    <br><br>
                                    Informatikos inžinerijos studentai:<br>
                                    Grupė IFB-7:<br>
                                    &nbsp;&nbsp;&nbsp;Vilius Krupavičius<br>
                                    &nbsp;&nbsp;&nbsp;Mindaugas Liutkauskas<br>
                                    &nbsp;&nbsp;&nbsp;Mindaugas Vinciūnas<br>
                                    Grupė IFC-7:<br>
                                    &nbsp;&nbsp;&nbsp;Justinas Bagdonas<br>
                                    &nbsp;&nbsp;&nbsp;Simas Krušniauskas<br>
                                    &nbsp;&nbsp;&nbsp;Marius Taparauskas<br>
                                    <br>
                                    Informatikos fakultetas<br>
                                    Kauno Technologijos Universitetas
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col container">
                                <img src="{{ asset('img/placeholder.jpg') }}" class="rounded-circle img img-border"
                                    alt="Justinas Bagdonas" width="175" height="175">
                                <div class="overlay">
                                    <h5 class="img-description">Justinas Bagdonas</h5>
                                </div>
                            </div>
                            <div class="col container">
                                <img src="{{ asset('img/placeholder.jpg') }}" class="rounded-circle img img-border"
                                    alt="Vilius Krupavičius" width="175" height="175">
                                <div class="overlay">
                                    <h5 class="img-description">Vilius Krupavičius</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col container">
                                <img src="{{ asset('img/placeholder.jpg') }}" class="rounded-circle img img-border"
                                    alt="Simas Krušniauskas" width="175" height="175">
                                <div class="overlay">
                                    <h5 class="img-description">Simas Krušniauskas</h5>
                                </div>
                            </div>
                            <div class="col container">
                                <img src="{{ asset('img/placeholder.jpg') }}" class="rounded-circle img img-border"
                                    alt="Mindaugas Liutkauskas" width="175" height="175">
                                <div class="overlay">
                                    <h5 class="img-description">Mindaugas Liutkauskas</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col container">
                                <img src="{{ asset('img/placeholder.jpg') }}" class="rounded-circle img img-border"
                                    alt="Mindaugas Vinciūnas" width="175" height="175">
                                <div class="overlay">
                                    <h5 class="img-description">Mindaugas Vinciūnas</h5>
                                </div>
                            </div>
                            <div class="col container">
                                <img src="{{ asset('img/placeholder.jpg') }}" class="rounded-circle img img-border"
                                    alt="Marius Taparauskas" width="175" height="175">
                                <div class="overlay">
                                    <h5 class="img-description">Marius Taparauskas</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <p>&copy; 2020 - Visos teisės saugomos.</p>
        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')

    </script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event) {
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();

            // Make sure they scroll more than delta
            if (Math.abs(lastScrollTop - st) <= delta)
                return;

            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight) {
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if (st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }

            lastScrollTop = st;
        }

    </script>
</body>

</html>
