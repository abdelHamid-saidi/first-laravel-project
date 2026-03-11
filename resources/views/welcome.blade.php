@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

  <h2>Bienvenue sur le site de {{ $name }}</h2>

  @forelse ($articles as $article)

    @if ($loop->last)
      @break
    @endif

    <a href="{{ route('articles.show', $article->id) }}">
      <x-article 
        :title="$article->title" 
        :description="Str::limit($article->description, 30)"
      />
    </a>
    
    @empty

    <p>Aucun article pour le moment.</p>

  @endforelse

@endsection