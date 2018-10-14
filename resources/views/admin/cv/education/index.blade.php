@extends('layouts.admin')

@section('content')
    <h1>Education</h1>
    @foreach($education as $educationObj)
        <section>
            <h2>{{ $educationObj->level }}</h2>
            <h3><strong>{{ $educationObj->level }}</strong> {{ $educationObj->field }}</h3>
            <h4>{{ $educationObj->school }}</h4>
            <p>{{ $educationObj->started_at }} - {{ $educationObj->finished_at }}</p>
            <p>{!! $educationObj->description !!}</p>

            <form method="post" action="{{ action('Admin\CV\EducationController@destroy', [$educationObj->id]) }}">
                <input type="hidden" name="_method" value="DELETE"/>
                {!! csrf_field() !!}

                <button type="submit">Delete</button>
            </form>
            <a href="{{ action('Admin\CV\EducationController@edit', [$educationObj->id]) }}">Edit</a>
        </section>
    @endforeach

    <a href="{{ action('Admin\CV\EducationController@create') }}">Create</a>

@endsection