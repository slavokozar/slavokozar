@extends('layouts.admin')

@section('content')
    <form method="post" action="{{ $skillObj->id ? action('Admin\CV\SkillController@store') : action('Admin\CV\SkillController@update', [$skillObj->id]) }}">
        {!! csrf_field() !!}

        <div class="form-group">
            <label>Education Level</label>
            <input type="text" name="name" value="{{ $skillObj->name }}"/>
        </div>

        <div class="form-group">
            <label>Education Field</label>
            <input type="text" name="level" value="{{ $skillObj->level }}"/>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description">{{ $skillObj->description }}</textarea>
        </div>

        <button type="submit">
            Ulozit
        </button>

    </form>

@endsection