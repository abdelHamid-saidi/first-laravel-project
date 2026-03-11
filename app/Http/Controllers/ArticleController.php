<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('pages.article-details', ["article" =>  $article]);
    }

    public function create()
    {
        Article::create([
            'title' => 'L’IA soigne mieux',
            'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.'
        ]);

        Article::create([
            'title' => 'Villes vertes',
            'description' => 'Les métropoles deviennent plus écologiques et durables.'
        ]);

        Article::create([
            'title' => 'Télétravail',
            'description' => 'Plus de liberté, mais aussi plus de solitude.'
        ]);

        return "Articles créés";
    }

    public function update($id)
    {
        $article = Article::findOrFail($id);

        $article->update([
            'title' => 'Article modifié',
            'description' => 'Le contenu de cet article a été modifié.'
        ]);

        return "Article modifié";
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return "Article supprimé";
    }
}
