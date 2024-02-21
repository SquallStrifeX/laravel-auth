{{-- resources/views/projects/index.blade.php --}}
@extends('layouts.app') {{-- Assicurati che questo layout esista o adattalo alla tua struttura --}}

@section('content')
<div class="container">
    <h1>Lista Progetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Data Inizio</th>
                <th>Data Fine</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>
                    <a href="{{ route('admin.projects.show', $project->slug) }}">{{ $project->name }}</a>
                </td>
                <td>{{ Str::limit($project->description, 50) }}</td>
                <td>{{ $project->date_start }}</td>
                <td>{{ $project->date_end ?? 'Non definita' }}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-info">Visualizza</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
