@extends('layouts.main')

@section('content')
    <section class="home-main">
        <!-- Comics -->
        <div class="container flex ai-center">
            <div class="comics flex">
                @foreach ($comics as $comic)
                    <div class="card">
                        <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                        <div class="comic-title">{{ $comic['title'] }}</div>
                    </div>
                @endforeach
            </div>

            <div class="load">load more</div>
        </div>
    </section>
@endsection

