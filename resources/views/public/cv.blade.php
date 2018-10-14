@extends('layouts.public')

@section('aside')
    <aside>
        hello
    </aside>
@endsection

@section('content')
    <section>
        <h2>Vzdelanie</h2>

        @foreach($education as $educationObj)
            <h3><strong>{{ $educationObj->level }}</strong> {{ $educationObj->field }}</h3>
            <h4>{{ $educationObj->school }}</h4>
            <p class="date">{{ $educationObj->started_at }} - {{ $educationObj->finished_at }}</p>
            <p>{!! $educationObj->description !!}</p>
        @endforeach
    </section>

    <section>
        <h2>Pracovné skúsenosti</h2>

        @foreach($experience as $experienceObj)
            <h3><strong>{{ $experienceObj->position }}</strong></h3>
            <h4>{{ $experienceObj->company }}</h4>
            <p class="date">{{ $experienceObj->started_at }} - {{ $experienceObj->finished_at }}</p>
            <p>{!! $experienceObj->description !!}</p>
        @endforeach
    </section>

    <section>
        <h2>Osvedčenia</h2>

        @foreach($certificates as $certificateObj)
            <h3><strong>{{ $certificateObj->name }}</strong></h3>
            <h4>{{ $certificateObj->authority }}</h4>
            <p class="date">{{ $certificateObj->started_at }} - {{ $certificateObj->finished_at }}</p>
            <p>{!! $certificateObj->description !!}</p>
        @endforeach
    </section>

    <section>
        <h2>Zručnosti</h2>

        @foreach($skills as $skillObj)
            <h3><strong>{{ $skillObj->name }}</strong></h3>
            <h4>{{ $skillObj->level }}</h4>
            <p>{!! $skillObj->description !!}</p>
        @endforeach
    </section>
@endsection
