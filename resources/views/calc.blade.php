@extends('layouts.app')

@section('title')
    <title>Skaičiuoklė | Laboratorinis darbas - tyrimas</title>
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md border">
                <h2 align="center">Laido rezistencijos skaičiuoklė</h2>
                <form method="POST" action="/process-graph">
                    @csrf
                    <div class="mb-2">
                        <div class="form-group">
                            <label for="material" class="form-label">Pasirinkite medžiagą:</label>
                            <select name="material" id="material" class="form-control">
                                <option value="copper">Varis</option>
                                <option value="aluminum">Aliuminis</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-group">
                            <label class="form-label" for="temp_coef">Nustatytas temperatūros koeficientas
                                (°C<sup>-1</sup>):</label>
                            <input class="form-control" id="temp_coef" name="temp_coef" type="text" disabled
                                value="{{ $temperature_coef ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="resist_at">Nustatytas rezistencijos koeficientas 20°C
                                temperatūroje (Ω mm<sup>2</sup> / m):</label>
                            <input class="form-control" id="resist_at" name="resist_at" type="text" disabled
                                value="{{ $resistivity_coef ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input_wire_area">Įveskite laido skerspjūvio plotą
                                (mm<sup>2</sup>):</label>
                            <input class="form-control" id="input_wire_area" name="input_wire_area" type="text">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input_temp">Įveskite temperatūrą (°C):</label>
                            <input class="form-control" id="input_temp" name="input_temp" type="text">
                        </div>
                    </div>
                    <div class="mb-2" id="results">
                        <span>Rezultatai <strong>{{ $input_temp ?? 'N/A' }}</strong> °C temperatūroje:</span><br>
                        <span>Rezistencija: <strong>{{ $result_resistivity ?? 'N/A' }}</strong> Ω mm<sup>2</sup> /
                            m</span><br>
                        <span>Rezistencija metre: <strong>{{ $result_resistance ?? 'N/A' }}</strong> Ω / m</span>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" name="create" class="btn btn-custom">SUDARYTI GRAFIKĄ</button>
                    </div>
                </form>
            </div>
            <div class="col-md">
                <canvas id="chart" width="400" height="400"></canvas>
                <script>
                    new Chart(document.getElementById("chart"), {
                        type: 'line',
                        data: {
                            labels: [1500, 1600, 1700, 1750, 1800, 1850, 1900, 1950, 1999, 2050],
                            datasets: [{
                                data: [86, 114, 106, 106, 107, 111, 133, 221, 783, 2478],
                                label: "Africa",
                                borderColor: "#3e95cd",
                                fill: false
                            }, {
                                data: [282, 350, 411, 502, 635, 809, 947, 1402, 3700, 5267],
                                label: "Asia",
                                borderColor: "#8e5ea2",
                                fill: false
                            }, {
                                data: [168, 170, 178, 190, 203, 276, 408, 547, 675, 734],
                                label: "Europe",
                                borderColor: "#3cba9f",
                                fill: false
                            }, {
                                data: [40, 20, 10, 16, 24, 38, 74, 167, 508, 784],
                                label: "Latin America",
                                borderColor: "#e8c3b9",
                                fill: false
                            }, {
                                data: [6, 3, 2, 2, 7, 26, 82, 172, 312, 433],
                                label: "North America",
                                borderColor: "#c45850",
                                fill: false
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                text: 'World population per region (in millions)'
                            }
                        }
                    });

                </script>
            </div>
        </div>
    </div>
@endsection
