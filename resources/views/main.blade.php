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
                        <div class="section-heading">
                            <h2 class="text-left" style="color: white">Tyrimas</h2>
                            <h1 class="text-center">Medžiagų varžos priklausomybė<br>nuo temperatūros</h1>
                            <div class="row">
                                <div class="col offset-4">
                                    <div class="white-button button">
                                        <a href="#lab-work">PRADĖTI KELIONĘ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <section id="lab-work" class="content-section">
            <div class="section-heading">
                <h2><em>Labo</em>ratorinis darbas</h2>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('img/pdf.png') }}" width="50px">
                        <a href="{{ asset('img/ataskaita.pdf') }}" download><h3 class="text-center">Darbo ataskaita</h3></a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/pdf.png') }}" width="50px">
                        <a href="{{ asset('img/aprasymas.pdf') }}" download><h3 class="text-center">Darbo aprašymas</h3></a>
                    </div>
                </div>
            </div>
             <div>
                <img src="{{ asset('img/irenginys.png') }}" width="900px">
                <p>Laboratorinio darbo maketas</p>
            </div>
        </section>
    </div>

    <div class="page-content">
        <section id="theory" class="content-section">
            <div class="section-heading">
                <h2><em>Teor</em>ija</h2>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 border">
                        <h2 class="text-left">Kas yra varža?</h2>
                        <p class="text-justify content">Varža, kartais vadinama aktyvioji varža, tai medžiagos savybė
                            priešintis
                            elektros srovei.
                            Ji egzistuoja todėl, kad laisvieji elektronai sąveikauja su laidininko atomais.
                            Kiekvieną kartą išvaduojant elektroną iš atomo įtakos, panaudojama šiek tiek energijos,
                            kuri virsta šiluminiais nuostoliais, o kartais ir šviesa.Jos didumas priklauso nuo
                            medžiagos,
                            iš kurios sudarytas kūnas, savitosios elektrinės varžos ir kūno formos.Varžos matavimo
                            vienetas
                            yra omas (Ω). Judėdami kūnu, elektronai atsitrenkia į jo atomus ir perduoda jiems energiją,
                            kartu įkaitindami kūną ir naudodami šaltinio energiją. Elektrinė varža
                            yra objekto geometrinių matmenų ir savitosios varžos funkcija:
                        </p>
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('img/varza-f.png') }}">
                            </div>
                            <div class="col-6">
                                <p class="text-left">
                                    l – laidininko ilgis metrais,<br>
                                    S – plotas kvadratiniais metrais,<br>
                                    p – medžiagos savitoji elektrinė varža, matuojama Ω · m.
                                </p>
                            </div>
                        </div>
                        <p class="text-left content">Elektrinė varža taip pat gali būti išreikšta iš Omo dėsnio:</p>
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('img/e-varza.png') }}">
                            </div>
                            <div class="col-6">
                                <p class="text-left">U – potencialų skirtumas išilgai objekto, skaičiuojamas
                                    voltais,<br>
                                    I – elektros srovė, tekanti per objektą, skaičiuojama amperais.
                                </p>
                            </div>
                        </div>
                        <h2 class="text-left">Kas yra savitoji varža?</h2>
                        <p class="text-justify content">Savitoji varža tai laidininko priešinimasis elektros srovės
                            tekėjimui.
                            Savitoji varža priklauso nuo medžiagos savybių, temperatūros.
                            Tai atvirkščias dydis elektriniam laidumui. Savitoji laidininko varža:
                        </p>
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('img/savitoji.png') }}" width="180px">
                            </div>
                            <div class="col-6">
                                <p class="text-left">ρ - savitoji t °C temperatūros laidininko varža,<br>
                                    ρ<sub>0</sub> - savitoji 0 °C temperatūros laidininko varža<br>
                                    α - temperatūrinis varžos koeficientas
                                </p>
                            </div>
                        </div>
                        <h2 class="text-left">Kaip varža priklauso nuo kūno formos?</h2>
                        <p class="text-justify content">Varža priklauso nuo kūno formos ir medžiagos iš kurios kūnas
                            sudarytas.
                            Cilindro formos rezistorius yra paprasčiausias kūnas paaiškinti varžai.
                            Panašiai kaip vandens vamzdžiui, cilindro ilgis ir skersmuo nusako kaip
                            stipriai kūnas priešinsis elektros srovei. Kuo ilgesnis kūnas tuo daugiau
                            elektronų susiduria su medžiagos atomais, taip silpninant elektros srovę -
                            keliant varžą. Tačiau didinant cilindro skersmenį, didėja elektros srovės
                            kiekis, kurį kūnas gali pernešti. Varža yra atvirkščiai proporcinga
                            cilindro skerspjūvio plotui.
                        </p>
                        <img src="{{ asset('img/cilinder.png') }}">
                        <h2 class="text-left">Kaip varža priklauso nuo temperatūros?</h2>
                        <p class="text-justify content">Visų medžiagų varža priklauso nuo temperatūros, tam tikros
                            medžiagos
                            gali tapti super-laidininkais beveik neturinčiais varžos žemoje temperatūroje.
                            Paprastai laidininkų elektrinė varža kyla su temperatūra. Kadangi temperatūrai
                            kylant, kūno atomai vibruoja smarkiau, dėl ko per tam tikrą atstumą, aukštesnėse
                            temperatūrose elektronai judantys kūnu, susiduria su daugiau atomų negu žemesnėje
                            temperatūroje.
                            Puslaidininkiai elgiasi atvirkščiai palyginus su laidininkais. Puslaidininkių
                            varža mažėja kylant temperatūrai, kadangi padidėjęs šiluminis sujudinimas padidina
                            laisvųjų krūvininkų kiekį. Ši savybė taip pat priklauso ir nuo medžiagos negrynumo -
                            įterptinių medžiagų kiekio kūne.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 section-heading" style="margin-bottom: 0; padding-bottom: 0;">
                        <h4 class="text-center">Perskaitei visą teoriją? Manai kažko išmokai? <a
                                href="/quiz"><em>Išbandyk jėgas trumpame testuke!</em></a></h4>
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
                            <form method="POST" action="/process-answer">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="pb-2">
                                            <div class="form-group">
                                                <label for="material" class="form-label">Pasirinkite
                                                    medžiagą:&nbsp;</label>
                                                <select name="material" id="material" class="form-control-range">
                                                    <?php for ($i = 0; $i < count($material_data); $i++):
                                                        ?> <option value="{{ $material_data[$i] }}"> <?php echo $name[$i]; ?></option>
                                                        <?php endfor; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="input_length">Įveskite Laido
                                                    ilgį (m):</label>
                                                <input class="form-control-range" id="input_length" name="input_length"
                                                    type="number" step="0.01">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="pb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="input_wire_area">Įveskite laido
                                                    skerspjūvio
                                                    plotą
                                                    (m<sup>2</sup>):</label>
                                                <input class="form-control-range" id="input_wire_area"
                                                    name="input_wire_area" type="number" step="0.0001">
                                            </div>
                                        </div>
                                        <div class="pb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="input_temp">Įveskite temperatūrą
                                                    (°C):</label>
                                                <input class="form-control-range" id="input_temp" name="input_temp"
                                                    type="number" step="0.0001">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 d-flex justify-content-center">
                                        <button type="submit" name="create" class="btn btn-custom" method="post">ATLIKTI
                                            SKAIČIAVIMUS</button>
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
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col container">
                                <img src="{{ asset('img/justinas.jpg') }}" class="rounded-circle img img-border"
                                    alt="Justinas Bagdonas" width="175" height="175">
                                <div class="overlay">
                                    <h5 class="img-description">Justinas Bagdonas</h5>
                                </div>
                            </div>
                            <div class="col container">
                                <img src="{{ asset('img/vilius.jpg') }}" class="rounded-circle img img-border"
                                    alt="Vilius Krupavičius" width="175" height="175">
                                <div class="overlay">
                                    <h5 class="img-description">Vilius Krupavičius</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col container">
                                <img src="{{ asset('img/simas.jpg') }}" class="rounded-circle img img-border"
                                    alt="Simas Krušniauskas" width="175" height="175">
                                <div class="overlay">
                                    <h5 class="img-description">Simas Krušniauskas</h5>
                                </div>
                            </div>
                            <div class="col container">
                                <img src="{{ asset('img/minliu1.jpg') }}" class="rounded-circle img img-border"
                                    alt="Mindaugas Liutkauskas" width="175" height="175">
                                <div class="overlay">
                                    <h5 class="img-description">Mindaugas Liutkauskas</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col container">
                                <img src="{{ asset('img/minvin.jpg') }}" class="rounded-circle img img-border"
                                    alt="Mindaugas Vinciūnas" width="175" height="175">
                                <div class="overlay">
                                    <h5 class="img-description">Mindaugas Vinciūnas</h5>
                                </div>
                            </div>
                            <div class="col container">
                                <img src="{{ asset('img/marius.jpg') }}" class="rounded-circle img img-border"
                                    alt="Marius Taparauskas" width="175" height="175">
                                <div class="overlay">
                                    <h5 class="img-description">Marius Taparauskas</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 border" style="margin-top: -50px; padding-bottom: 20px;">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title">Sveiki draugai!</h2>
                                <p class="text-justify content">
                                    Esame linksmi, jauni ir gražūs vyrukai, sėkmingai
                                    žengiantys bakalauro studijų keliu. Nors kelio liko nedaug,
                                    ir paskutinis kursas spaudžia baigiamuoju darbu, pastangų nepagailėjome
                                    ir šiam projektui.
                                </p>
                                <p class="text-right content">
                                    - pasirašo informatikos inžinerijos studentai iš
                                </p>
                                <p class="text-justify content">
                                    IFB-7 grupės:
                                </p>
                                <ul class="list-unstyled content text-left">
                                    <li>Vilius Krupavičius</li>
                                    <li>Mindaugas Liutkauskas</li>
                                </ul>
                                <p class="text-left content">IFC-7 grupės:</p>
                                <ul class="list-unstyled content text-left">
                                    <li>Justinas Bagdonas</li>
                                    <li>Simas Krušniauskas</li>
                                    <li>Marius Taparauskas</li>
                                    <li>Mindaugas Vinciūnas</li>
                                </ul>
                                <img src="{{ asset('img/ktu.png') }}" style="opacity: 0.5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <p>&copy; 2020 | Studijuojam - ne studentaujam.</p>
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
