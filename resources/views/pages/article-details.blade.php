@extends('layouts.app')

@section('title', 'Article')

@section('content')

  <x-article 
    :id="$article->id" 
    :title="$article->title" 
    :description="Str::limit($article->description, 30)"
  />
    
@endsection