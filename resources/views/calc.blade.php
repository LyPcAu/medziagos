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
                                                    <?php for ($i = 0; $i < count($material_data); $i++):?>
                                                        <option value="{{ $material_data[$i] }}"> <?php echo $name[$i]; ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="input_length">Įveskite Laido
                                                    ilgį (m):</label>
                                                <input class="form-control-range" id="input_length" name="input_length"
                                                    type="number" step="0.0001">

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
                                        <button type="submit" name="create" class="btn btn-custom"
                                            method="post">ATLIKTI SKAIČIAVIMUS</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
        <section class="content-section">
            <div class="section-heading">
                <h2><em>Gaut</em>i duomenys</h2>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 border">
                        <h4>Medžiaga <strong>{{ $medziaga ?? 'N/A' }}</strong></h4>
                        <h4>Savitoji varža pasirinktoje temperatūroje <strong>{{ $coff ?? 'N/A' }}</strong>Ω*m</h4>
                        <h4>Plotas <strong>{{ $wire_area ?? 'N/A' }}</strong> m<sup>2</sup></h4>
                        <h4>Ilgis <strong>{{ $length ?? 'N/A' }}</strong> m</h4>
                        <h4>Temperatūra <strong>{{ $data_2['temp'] ?? 'N/A' }}</strong>°C</h4>
                    </div>
                </div>
        </section>
        <section class="content-section">
            <div class="section-heading">
                <h2><em>Rezu</em>ltatai</h2>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 border">
                        <h4>Varža: <strong>{{ $data_2['calc'] ?? 'N/A' }}</strong> Ω</h4>
                        <h4>Varža metre: <strong>{{ $data_2['calc_in_meter'] ?? 'N/A' }}</strong>
                            Ω /
                            m;</h4>
                    </div>
                </div>
        </section>
        <section class="content-section">
            <div class="section-heading">
                <h2><em>Pral</em>aidumo grafikas pasirinktai medžiagai</h2>
            </div>
            <div class="section-content pb-5">
                <div class="row">
                    <div class="col-md-12">
                        <img src = "{{ asset('graphs/' . $material . '.jpg')}}">
                    </div>
                </div>
        </section>
    </div>
</body>
</html>
