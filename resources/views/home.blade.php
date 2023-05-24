@extends('layouts.app')

@section('content')
    <h1 class="mt-5 ms-5">AVAIABLE MOVIES</h1>

    <section class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 g-4">

                @forelse ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{$movie->title}}</h3>
                            <p>{{$movie->date}}</p>
                            <button class="btn btn-success">Watch now</button>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col">
                    <p>Sorry there are no movies</p>
                </div>
                @endforelse
    
            </div>
        </div>

    </section>
@endsection