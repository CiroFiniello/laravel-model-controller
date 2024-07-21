@extends('layouts.app')

@section('page-title', 'Movies List')


@section('main-content')
    <h3>
        Movies List
    </h3>
    {{-- @dump($movies) --}}
    <ul>
        @foreach ($movies as $movie)
            <li>
                <div class="cards">
                    <article class="card">
                        Titolo : <h1>
                            {{$movie->title}}
                        </h1>
                        Lingua: <h4>
                        {{ $movie->nationality }}
                        </h4>
                        Data: <h4>
                            {{ $movie->date }}
                        </h4>
                        Voto: <h4>
                            {{ $movie->vote }}
                        </h4>
                    </article>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
