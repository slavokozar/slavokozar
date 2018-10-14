<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slavo Kozar{{ isset($title) ? ' - ' . $title : null }}</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">


    <header>
        <h1><a href="{{ action('HomeController@index')  }}">Slavo Kožár</a></h1>
    </header>

    <nav>
        <ul>
            <li class="">
                Curriculum
                <ul>
                    <li>
                        <a href="{{ action('Admin\CV\EducationController@index') }}">
                            Education
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('Admin\CV\ExperienceController@index') }}">
                            Experience
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('Admin\CV\CertificationController@index') }}">
                            Certification
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('Admin\CV\SkillController@index') }}">
                            Skill
                        </a>
                    </li>
                </ul>
            </li>
            <li class="active">
                <a href="{{ action('Admin\ProjectController@index')  }}">
                    Projekty
                </a>
            </li>
            <li class="active">
                <a href="{{ action('Admin\ArticleController@index')  }}">
                    Články
                </a>
            </li>
            <li class="active">
                <a href="{{ action('ContactController@index')  }}">
                    Kontakt
                </a>
            </li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>Copyright 2009 Your name</p>
        </div>

    </footer>
</div>
</body>
</html>