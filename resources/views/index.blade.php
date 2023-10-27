@extends('layout.app')

{{-- THIS CHANGES THE @yield() ON THE app.blade <title> --}}
@section('title', 'Movies')

@section('content')
    <h1>MOVIES</h1>
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-5">

                @forelse ($movies as $movie)
                    <div class="col">
                        {{ $movie->title }}
                    </div>
                @empty
                    <div class="col">
                        <h2>No Movies in the database! 😥</h2>
                    </div>
                @endforelse

            </div>

        </div>
    </main>
@endsection
