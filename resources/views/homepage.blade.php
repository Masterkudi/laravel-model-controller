@extends("layouts.public")

@section("content")
    <h1>Hello Folks!</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movies->title}}</li>
        @endforeach    
    </ul>
@endsection