@extends('layouts.admin')

@section('content')
    <form method="post" action="{{ $certificationObj->id ? action('Admin\CV\CertificationController@store') : action('Admin\CV\CertificationController@update', [$certificationObj->id]) }}">
        {!! csrf_field() !!}

        <div class="form-group">
            <label>Education Level</label>
            <input type="text" name="name" value="{{ $certificationObj->name }}"/>
        </div>

        <div class="form-group">
            <label>Education Field</label>
            <input type="text" name="authority" value="{{ $certificationObj->authority }}"/>
        </div>

        <div class="form-group">
            <label>Start</label>
            <input type="text" name="started_at" value="{{ $certificationObj->started_at }}"/>
        </div>

        <div class="form-group">
            <label>End</label>
            <input type="text" name="ended_at" value="{{ $certificationObj->ended_at }}"/>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description">{{ $certificationObj->description }}</textarea>
        </div>

        <button type="submit">
            Ulozit
        </button>

    </form>

@endsection