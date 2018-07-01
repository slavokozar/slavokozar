<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<header>
    <h1>Slavo Kožár</h1>
    <nav>
        <ul>
            <li>Link</li>
            <li>Link</li>
            <li>Link</li>
            <li>Link</li>
        </ul>
    </nav>
</header>

<section class="container">

    <article>
        <header>
            <h2>Article title</h2>
            <p>Posted on
                <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time>
                by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
        </header>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </article>

    <article>
        <header>
            <h2>Article title</h2>
            <p>Posted on
                <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time>
                by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
        </header>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        <blockquote>
            <p>This is a short block quote — look Ma, no paragraph tags!</p>
            <footer>
                —
                <cite>
                    <a title="4.5 Grouping content — HTML5"
                       href="http://dev.w3.org/html5/spec/grouping-content.html#the-blockquote-element">
                        W3C HTML5 specification
                    </a>
                </cite>
            </footer>
        </blockquote>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        <figure>
            <img
                    src="https://developer.cdn.mozilla.net/media/img/mdn-logo-sm.png"
                    alt="An awesome picture">
            <figcaption>MDN Logo</figcaption>
        </figure>
    </article>

</section>


<footer>
    <div class="container">
        <p>Copyright 2009 Your name</p>
    </div>

</footer>

</body>
</html>
