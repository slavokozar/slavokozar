@extends('layouts.admin')

@section('content')
    <form method="post" action="{{ $experienceObj->id ? action('Admin\CV\ExperienceController@store') : action('Admin\CV\ExperienceController@update', [$experienceObj->id]) }}">
        {!! csrf_field() !!}

        <div class="form-group">
            <label>Education Level</label>
            <input type="text" name="position" value="{{ $experienceObj->position }}"/>
        </div>

        <div class="form-group">
            <label>Education Field</label>
            <input type="text" name="company" value="{{ $experienceObj->company }}"/>
        </div>

        <div class="form-group">
            <label>Start</label>
            <input type="text" name="started_at" value="{{ $experienceObj->started_at }}"/>
        </div>

        <div class="form-group">
            <label>End</label>
            <input type="text" name="ended_at" value="{{ $experienceObj->ended_at }}"/>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description">{{ $experienceObj->level }}</textarea>
        </div>

        <button type="submit">
            Ulozit
        </button>

    </form>

@endsection