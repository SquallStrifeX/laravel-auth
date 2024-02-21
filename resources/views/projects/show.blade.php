{{-- resources/views/projects/show.blade.php --}}
@extends('layouts.app') {{-- Assicurati che questo layout esista o adattalo alla tua struttura --}}

@section('content')
<div class="container">
    <h1>Dettagli Progetto: {{ $project->name }}</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $project->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Data Inizio: {{ $project->date_start }} | Data Fine: {{ $project->date_end ?? 'Non definita' }}</h6>
            <p class="card-text">{{ $project->description }}</p>
            <a href="{{ $project->repository_link }}" class="card-link" target="_blank">Link al Repository</a>
            @if ($project->img)
                <div class="mt-3">
                    <img src="{{ $project->img }}" alt="Immagine del Progetto" style="max-width: 100%; height: auto;">
                </div>
            @endif
            <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Indietro</a>
        </div>
    </div>
</div>
@endsection
