{{--review.blade.php--}}
@extends('layout')

@section('title')
Atsiliepimai
@endsection

@section('main_content')
    <h2>Atsiliepimo pridėjimo forma</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Įveskite el.pašto adresą" class="form-control mb-2">
        <input type="text" name="subject" id="subject" placeholder="Parašykite atsiliepimą" class="form-control mb-2">
        <textarea name="message" id="message" class="form-control mb-2" placeholder="Įveskite žinutę"></textarea><br>
        <button type="submit" class="btn btn-success mb-2">Išsiūsti</button>
    </form>
     <h2>Visi atsiliepimai</h2>
        @foreach($reviews as $el)
            <div class= "alert alert-warning">
                <h3>{{$el->subject}}</h3>
            </div>
        @endforeach

@endsection
