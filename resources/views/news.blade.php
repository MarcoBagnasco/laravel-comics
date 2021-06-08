@extends('layouts.main')

@section('page-title', 'DC COMICS | NEWS')

@section('content')
    <section class="news-main">
        <div class="container">
            <h1 class="news-title">dc news</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nam nobis quaerat aut dolorum! Nobis, culpa maiores amet eveniet eos in ullam doloribus fugit autem laboriosam facilis at explicabo id.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, tenetur quibusdam esse quam perferendis aperiam autem officia similique explicabo obcaecati necessitatibus accusantium est? Nihil cum reprehenderit qui aliquid quis debitis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore rerum odio rem illo incidunt. Numquam deleniti voluptatem odit quos, quia est quis excepturi laboriosam nobis ad velit deserunt dolor esse.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus sint consequuntur iste culpa nostrum veniam beatae in excepturi numquam voluptas aliquid aliquam quaerat voluptatem, suscipit quis, sunt ullam inventore labore?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur non ea deleniti iusto aliquid amet a tempore odit alias.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt iste expedita facilis ad iure saepe in aut consectetur adipisci corporis! Cum aperiam possimus quo mollitia consequatur facilis reiciendis sunt optio!</p>

            <p>{{Route::currentRouteName()}}</p>
        </div>
    </section>
@endsection