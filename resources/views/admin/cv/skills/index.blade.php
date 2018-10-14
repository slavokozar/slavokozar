@extends('layouts.admin')

@section('content')
    <h1>Skills</h1>
    @foreach($skills as $skillObj)
        <section>
            <h2>{{ $skillObj->level }}</h2>
            <h3><strong>{{ $skillObj->level }}</strong> {{ $skillObj->field }}</h3>
            <h4>{{ $skillObj->school }}</h4>
            <p>{{ $skillObj->started_at }} - {{ $skillObj->finished_at }}</p>
            <p>{!! $skillObj->description !!}</p>

            <form method="post" action="{{ action('Admin\CV\SkillController@destroy', [$skillObj->id]) }}">
                <input type="hidden" name="_method" value="DELETE"/>
                {!! csrf_field() !!}

                <button type="submit">Delete</button>
            </form>
            <a href="{{ action('Admin\CV\SkillController@edit', [$skillObj->id]) }}">Edit</a>
        </section>
    @endforeach

    <a href="{{ action('Admin\CV\SkillController@create') }}">Create</a>


@endsection