@extends('layouts.admin')

@section('content')
    <form method="post" action="{{ $educationObj->id ? action('Admin\CV\EducationController@store') : action('Admin\CV\EducationController@update', [$educationObj->id]) }}">
        {!! csrf_field() !!}

        <div class="form-group">
            <label>Education Level</label>
            <input type="text" name="level" value="{{ $educationObj->level }}"/>
        </div>

        <div class="form-group">
            <label>Education Field</label>
            <input type="text" name="field" value="{{ $educationObj->field }}"/>
        </div>

        <div class="form-group">
            <label>School</label>
            <input type="text" name="school" value="{{ $educationObj->school }}"/>
        </div>

        <div class="form-group">
            <label>Start</label>
            <input type="text" name="started_at" value="{{ $educationObj->started_at }}"/>
        </div>

        <div class="form-group">
            <label>End</label>
            <input type="text" name="ended_at" value="{{ $educationObj->ended_at }}"/>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description">{{ $educationObj->description }}</textarea>
        </div>

        <button type="submit">
            Ulozit
        </button>

    </form>

@endsection