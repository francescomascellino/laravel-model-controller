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
