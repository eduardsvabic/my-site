@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
    <div class="panel-heading" align="center"> Modificare informatii Produs</div>
    <div class="panel-body">
    <!--exista inregistrari in tabelul task -->
    @if (count($errors) > 0)
    <div class="alert alert-danger">
    <strong>Eroare:</strong>
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
    <!--populez campurile formularului cu datele aferente din tabela task -->

    {!! Form::model($task, ['method' => 'PATCH','route' =>
    ['tasks.update', $task->id]]) !!}
    <div class="form-group">
        <strong for="name">Nume</strong>
        <input type="text" name="name" class="form-control" value="{{$task->name }}">
    </div>
    <div class="form-group">
        <strong for="description">Descriere</strong>
        <textarea name="description" class="form-control" rows="3">{{ $task->description }}</textarea>
    </div>
    <div class="form-group">
        <strong for="price">Pret</strong>
        <input type="number" step="0.01" name="price" class="form-control" rows="3" value="{{ $task->price }}"></input>
    </div>
    <div class="form-group">
        <strong for="photo">Img Path</strong>
        <input type="text" name="photo" class="form-control" rows="3" value="{{ $task->photo }}"></input>
    </div>
    <p>
    <div class="form-group">
        <input type="submit" value="Salvare Modificari" class="btn btn-info">
        <a href="{{route('tasks.index') }}" class="btn btndefault">Cancel</a>
    </div>
    {!! Form::close() !!}
    </div>
    </div>
@endsection
