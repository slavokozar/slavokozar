@extends('layouts.admin')

@section('content')
    <h1>Certification</h1>
    @foreach($certifications as $certificationObj)
        <section>
            <h2>{{ $certificationObj->level }}</h2>
            <h3><strong>{{ $certificationObj->level }}</strong> {{ $certificationObj->field }}</h3>
            <h4>{{ $certificationObj->school }}</h4>
            <p>{{ $certificationObj->started_at }} - {{ $certificationObj->finished_at }}</p>
            <p>{!! $certificationObj->description !!}</p>

            <form method="post" action="{{ action('Admin\CV\CertificationController@destroy', [$certificationObj->id]) }}">
                <input type="hidden" name="_method" value="DELETE"/>
                {!! csrf_field() !!}

                <button type="submit">Delete</button>
            </form>
            <a href="{{ action('Admin\CV\CertificationController@edit', [$certificationObj->id]) }}">Edit</a>
        </section>
    @endforeach

    <a href="{{ action('Admin\CV\CertificationController@create') }}">Create</a>

@endsection