<header class="main-header">
    <div class="container flex">
        <img src="{{ asset('images/dc-logo.png') }}" alt="logo dc">

        <!-- Header Nav -->
        <nav class="header-nav flex">
            <ul class="list-inline">
                <li class="flex ai-center active"><a href="{{ route('home') }}">comics</a></li>
                <li class="flex ai-center"><a href="{{ route('news') }}">news</a></li>
            </ul>
        </nav>
    </div>
</header>