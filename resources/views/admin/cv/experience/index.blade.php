@extends('layouts.admin')

@section('content')
    <h1>Experience</h1>
    @foreach($experience as $experienceObj)
        <section>
            <h2>{{ $experienceObj->level }}</h2>
            <h3><strong>{{ $experienceObj->level }}</strong> {{ $experienceObj->field }}</h3>
            <h4>{{ $experienceObj->school }}</h4>
            <p>{{ $experienceObj->started_at }} - {{ $experienceObj->finished_at }}</p>
            <p>{!! $experienceObj->description !!}</p>

            <form method="post" action="{{ action('Admin\CV\ExperienceController@destroy', [$experienceObj->id]) }}">
                <input type="hidden" name="_method" value="DELETE"/>
                {!! csrf_field() !!}

                <button type="submit">Delete</button>
            </form>
            <a href="{{ action('Admin\CV\ExperienceController@edit', [$experienceObj->id]) }}">Edit</a>
        </section>
    @endforeach

    <a href="{{ action('Admin\CV\ExperienceController@create') }}">Create</a>


@endsection