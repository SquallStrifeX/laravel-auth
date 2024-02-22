{{-- resources/views/admin/projects/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica Progetto: {{ $project->name }}</h1>
    <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
        @csrf
        @method('PUT') {{-- Importante per le richieste di aggiornamento in Laravel --}}
        <div class="form-group">
            <label for="name">Nome Progetto</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $project->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="date_start">Data Inizio</label>
            <input type="date" class="form-control" id="date_start" name="date_start" value="{{ $project->date_start }}">
        </div>
        <div class="form-group">
            <label for="date_end">Data Fine (opzionale)</label>
            <input type="date" class="form-control" id="date_end" name="date_end" value="{{ $project->date_end }}">
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna Progetto</button>
    </form>
</div>
@endsection
