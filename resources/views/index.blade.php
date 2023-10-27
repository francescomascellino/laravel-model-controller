@extends('layout.app')

{{-- THIS CHANGES THE @yield() ON THE app.blade <title> --}}
@section('title', 'Movies')

@section('content')

    <main>
        <div class="container">
            <h1 class="text-center mt-3">model - movies</h1>
            <div class="row row-cols-1 row-cols-md-2 g-4 my-3">

                @include('partiaks.cards')

            </div>

        </div>
    </main>
@endsection
