@extends('layout.app')

{{-- THIS CHANGES THE @yield() ON THE app.blade <title> --}}
@section('title', 'Movies')

@section('content')

    <main>
        <div class="container">
            <h1 class="text-center mt-3">MOVIES</h1>
            <div class="row row-cols-1 row-cols-md-2 g-4 my-3">

                @forelse ($movies as $movie)
                    <div class="col">

                        <div class="card shadow h-100">
                            <div class="card-body">
                                <h4 class="card-title">{{ $movie->title }}</h4>
                                <p><strong>Original title: </strong>{{ $movie->original_title }}</p>
                                <p><strong>Nationality: </strong>{{ $movie->nationality }}</p>
                                <p><strong>Released on: </strong>{{ $movie->date }}</p>
                                <p><strong>Vote on: </strong>{{ $movie->vote }}</p>
                            </div>
                        </div>

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
