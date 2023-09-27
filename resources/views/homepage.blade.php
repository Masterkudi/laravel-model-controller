@extends("layouts.public")

@section("content")

    <div class="container card-container">
        <div class="row row-cols-3 g-5 justify-content-center">

            @foreach ($movies as $movie )
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$movie->title}}</h3>
                        <h4 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h4>
                        <p class="card-text">nationality: {{$movie->nationality}}</p>
                        <p class="card-text">date: {{$movie->date}}</p>
                        <p class="card-text"> vote: <strong> {{$movie->vote}}</strong></p>
                    </div>
                </div>
            </div>
                
            @endforeach

        </div>
    </div>

@endsection