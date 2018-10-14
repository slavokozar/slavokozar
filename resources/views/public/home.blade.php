@extends('layouts.public')

@section('aside')
    @include('public.aside')
@endsection

@section('content')
    <section>
        <article>
            <header>
                <h2>CodeLeague</h2>
                <p>Posted on
                    <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time>
                    by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
            </header>
            <p>Programovanie by v 21. storočí malo mať v školách podobné postavenie ako matematika v tom minulom.
                Každý by mal vedieť programovať počítač, pretože Vás to naučí rozmýšlať (Steve Jobs). IT a špeciálne
                programovanie sa rozvíja najrýchlejšie zo všetkých odvetví. Bohužiaľ školstvo na tieto trendy
                nestíha reagovať. V západnej európe a za morom je štandard, že kde zaostáva verejný sektor preberajú
                žezlo dobrovoľníci a podnikateľská sféra. Práve preto sme tu my.</p>

            <p>
                CodeLeague vznikla z iniciatívy nás, absolventov, v roku 2014 na našej alma máter SPŠE v Prešove ako
                súťaž, ktorej cieľom bolo dlhodobo pripravovať študentov na stredoškolské súťaže v programovaní.</p>
            <blockquote>
                <p>Cieľom bolo pripravovať študentov na súťaže v programovaní.</p>
            </blockquote>

            <p>Prvý rok sme prestrelili úroveň a po jednom zadaní bez úspešných riešiteľov sme sa začali pripravovať
                na
                ďalší ročník. Do neho sa zapojili desiatky riešiteľov v dvoch etapách a dokonca aj niekoľko učiteľov
                programovania.</p>

            <p>Po roku prevádzky na SPŠE v Prešove dávame šancu Vám všetkým zapojiť sa do tohto inovačného procesu.
                Naše zadania sú stavané podobne ako zadania z už etablovaných programátorských súťaží, ale obsahujú
                témy z programátorskej praxe a akademického prostredia. Zapoj sa do súťaže, preštuduj si naše
                tutoriály a články a posuň sa na ďalší level.</p>
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
                <!--<img-->
                <!--src="https://developer.cdn.mozilla.net/media/img/mdn-logo-sm.png"-->
                <!--alt="An awesome picture">-->
                <figcaption>MDN Logo</figcaption>
            </figure>
        </article>
    </section>
@endsection