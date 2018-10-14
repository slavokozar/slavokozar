<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Slavo Kozar{{ isset($title) ? ' - ' . $title : null }}</title>
</head>
<body>

<header>
    <div class="top">
        <h1><a href="{{ action('HomeController@index')  }}">Slavo Kožár</a></h1>

        <button class="hamburger">
            <span></span>
        </button>
    </div>
    <div class="motto">a jeho nekorektná a neobjektívna prezentácia...</div>

    <nav>
        <ul class="container">
            <li class="">
                <a href="{{ action('CVController@index') }}">
                    Curriculum
                </a>
            </li>
            <li class="active">
                <a href="{{ action('ProjectController@index')  }}">
                    Projekty
                </a>
            </li>
            <li class="active">
                <a href="{{ action('ArticleController@index')  }}">
                    Články
                </a>
            </li>
            <li class="active">
                <a href="{{ action('ContactController@index')  }}">
                    Kontakt
                </a>
            </li>
            <li>
                <button>
                    <i class="fas fa-search"></i>
                </button>
            </li>
        </ul>
    </nav>
</header>

<div id="wrapper" class="container">
    @yield('aside')

    <main>
        @yield('content')
    </main>
</div>


<footer>
    <div class="container">
        <p>Copyright 2009 Your name</p>
    </div>

</footer>

</body>
</html>