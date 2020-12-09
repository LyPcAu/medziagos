<div id="results">
    <span>Rezultatai <strong>{{ $temp ?? 'N/A' }}</strong> °C
        temperatūroje:</span><br>
    <span>Varža: <strong>{{ $calc ?? 'N/A' }}</strong> Ω
        mm<sup>2</sup> /
        m</span><br>
    <span>Varža metre: <strong>{{ $calc_in_meter ?? 'N/A' }}</strong>
        Ω /
        m</span>
</div>
<img src = "{{ asset('graphs/aluminum.jpg')}}">
