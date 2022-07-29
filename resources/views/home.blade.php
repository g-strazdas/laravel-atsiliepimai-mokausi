{{--home.blade.php--}}
@extends('layout')

@section('title')
Pagrindinis puslapis
@endsection

@section('main_content')
    <main role="main">
        <div class="jumbotron bg-warning">
            <div class="container">
                <h1 class="display-3">Pagrindinis puslapis</h1>
                    <p>This is a template for a simple marketing or informational website.</p>
                    <p><a class="btn btn-danger btn-lg" href="#" role="button">Atsiliepimai</a></p>
           </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusee dapibus, tellus ac cursus commodo</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details</a></p>
                </div>
                    <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusee dapibus, tellus ac cursus commodo</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details</a></p>
                </div>
                    <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusee dapibus, tellus ac cursus commodo</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details</a></p>
                </div>
            </div>
        <hr>
        </div>
    </main>
@endsection
