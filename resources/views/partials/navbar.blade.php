<header id="main-header">
    <div class="row">
        <div class="small-11 large-6 columns"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="AwakenHeroes" style="width: 50%;" class="logo"></a></div>
        <nav id="main-nav" class="small-16 large-10 columns">
            <ul class="main-menu">
                <li><a @if(Request::is('/')) class="active" @endif href="{{ route('home') }}">Home</a></li>
                <li><a @if(Request::is('news')) class="active" @endif href="{{ route('news') }}">News</a></li>
                <li><a @if(Request::is('receipts')) class="active" @endif href="#">Forum</a></li>
                <li><a @if(Request::is('about')) class="active" @endif href="{{ route('about') }}">About</a></li>
                <li><a @if(Request::is('contact')) class="active" @endif href="{{ route('contact') }}">Contact</a></li>
                <li>
                    @if( ! Auth::check())
                        <a href="{{ route('login') }}">Login</a>
                    @else
                        <a href="{{ route('doLogout') }}">Logout</a>
                    @endif
                </li>
            </ul>
            <ul class="mobile-menu"></ul>
        </nav>
    </div>
</header>