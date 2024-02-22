{{-- resources/views/admin/projects/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea Nuovo Progetto</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome Progetto</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome del progetto">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="date_start">Data Inizio</label>
            <input type="date" class="form-control" id="date_start" name="date_start">
        </div>
        <div class="form-group">
            <label for="date_end">Data Fine (opzionale)</label>
            <input type="date" class="form-control" id="date_end" name="date_end">
        </div>
        <button type="submit" class="btn btn-primary">Crea Progetto</button>
    </form>
</div>
@endsection
