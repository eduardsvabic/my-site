@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading" align="center"> <b> Adaugă Produs nou </b> </div>
        <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Errors:</strong>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
        {{ Form::open(array('route' => 'tasks.store','method'=>'POST')) }}
        <div class="form-group">
            <label for="name"><b>Nume</b></label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
        </div>
    <div class="form-group">
        <label for="description"><b>Descriere</b></label>
        <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
    </div>
    <div class="form-group">
        <strong for="price">Pret</strong>
        <input type="number" step="0.01" name="price" class="form-control" rows="3" value="{{ old('price') }}"></input>
    </div>
    <div class="form-group">
        <strong for="photo">Img Path</strong>
        <input type="text" name="photo" class="form-control" rows="3" value="{{ old('photo') }}"></input>
    </div>
    <p>
    <div class="form-group">
        <input type="submit" value="Adauga Produs" class="btn btn-info">
        <a href="{{ route('tasks.index') }}" class="btn btndefault">Cancel</a>
    </div>
    {{ Form::close() }}
    </div>
    </div>
@endsection