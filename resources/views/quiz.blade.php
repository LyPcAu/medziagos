@extends('layouts.app')

@section('title')
    <title>Laboratorinis darbas - tyrimas</title>
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-5 border">
                <p>Testas</p>
            </div>
            <div class="col-md-6 offset-1">
                @if (session('message'))
                    <p style="color:green">{{session('message')}}</p>
                    <form action="/postQuiz" method="POST">
                        @csrf
                        @for($i = 0; $i < count($questions); $i++)
                            <b><p>{{$questions[$i]}}</p></b>
                            @for($j = 0; $j < count($answers[$i]); $j++)
                                @if($answers[$i][$j] == old($i))
                                    @if(old($i) == $correct[$i])
                                        <input type="radio" id="{{$answers[$i][$j]}}" name="{{$i}}" value="{{$answers[$i][$j]}}" checked>
                                        <label for="{{$answers[$i][$j]}}" style="color: green">{{$answers[$i][$j]}}</label><br>
                                    @else
                                        <input type="radio" id="{{$answers[$i][$j]}}" name="{{$i}}" value="{{$answers[$i][$j]}}" checked>
                                        <label for="{{$answers[$i][$j]}}" style="color: red">{{$answers[$i][$j]}}</label><br>
                                    @endif
                                @else
                                    <input type="radio" id="{{$answers[$i][$j]}}" name="{{$i}}" value="{{$answers[$i][$j]}}">
                                    <label for="{{$answers[$i][$j]}}">{{$answers[$i][$j]}}</label><br>
                                @endif
                            @endfor
                        @endfor
                    </form>
                    <a href="/"><button>Grįžti į pradinį</button></a>
                    <a href="/quiz"><button>Bandyti testą dar kartą</button></a>
                @else
                    <form action="/postQuiz" method="POST">
                        @csrf
                        @for($i = 0; $i < count($questions); $i++)
                            <b><p>{{$questions[$i]}}</p></b>
                            @for($j = 0; $j < count($answers[$i]); $j++)
                                <input type="radio" id="{{$answers[$i][$j]}}" name="{{$i}}" value="{{$answers[$i][$j]}}" required>
                                <label for="{{$answers[$i][$j]}}">{{$answers[$i][$j]}}</label><br>
                            @endfor
                        @endfor
                        <input type="submit" value="Submit">
                    </form>
                @endif

            </div>
        </div>
    </div>
@endsection
