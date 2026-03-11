@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

  <h2>Bienvenue sur le site de {{ $name }}</h2>

  @forelse ($articles as $article)

    @if ($loop->last)
      @break
    @endif

    <x-article
      :title="$article['title']"
      :description="Str::limit($article['description'], 30)" />

    @empty

    <p>Aucun article pour le moment.</p>

  @endforelse

@endsection