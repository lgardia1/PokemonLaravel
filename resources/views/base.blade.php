<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="{{ url('asset/styles/styles.css') }}">
    @yield('styles')
</head>

<body>
    <section class="hero-section">
        <header>

            <div class="box-menu">

                <div class="logo">
                    <img src="{{ url('/asset/img/pokeball.png') }}" alt="Pokeball" class="logo-image">
                </div>
                <div class="content-container">
                    <div class="title">
                        <h1>Poke<span>dex</span></h1>
                    </div>

                    <nav class="toggle-nav">

                        <ul class="toggle-nav_list">
                            <li class="toggle-nav_item animation1">
                                <a href="{{url('')}}">Home</a>
                                <div class="animation-underline"></div>
                            </li>
                            <li class="toggle-nav_item animation2">

                                <a href="{{url('pokemon/')}}">Pokemons</a>
                                <div class="animation-underline"></div>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="box-triangle">
                <div class="triangle"></div>
            </div>
        </header>
        <main>
            <div class="section">
                <h1>@yield('title')</h1>
            </div>
            
            <div class="container">

                @if(session('message'))
                <div class="message">
                    result:{{session('message')}} 
                </div>

                @elseif($errors->any())
                <div class="danger">
                    result:{{$errors->first()}} 
                </div>
                @endif

                <div class="row">
                    <h3>@yield('description')</h3>
                </div>

                @yield('content')
            </div>
        </main>
    </section>
</body>

</html>
