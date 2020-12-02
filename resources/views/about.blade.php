@extends('layouts.app')

@section('title')
    <title>Komanda | Laboratorinis darbas - tyrimas</title>
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-5 border">
                <h4 class="text-center">Malonu susipažinti!</h4>
                <p>Esame IFB-7 ir IFC-7 grupių studentai. Gyvenam linksmai, geriam mažai, bet dirbam efektyviai. Baigsim projektuką greit :)</p>
            </div>
            <div class="col-md-6 offset-1">
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
                    <div class="col container">
                        <img src="{{ asset('img/placeholder.jpg') }}" class="rounded-circle img img-border"
                            alt="Simas Krušniauskas" width="175" height="175">
                        <div class="overlay">
                            <h5 class="img-description">Simas Krušniauskas</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col container">
                        <img src="{{ asset('img/placeholder.jpg') }}" class="rounded-circle img img-border"
                            alt="Mindaugas Liutkauskas" width="175" height="175">
                        <div class="overlay">
                            <h5 class="img-description">Mindaugas Liutkauskas</h5>
                        </div>
                    </div>
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
@endsection
