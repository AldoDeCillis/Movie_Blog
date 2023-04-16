<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index()
    {
        $articles_to_check = Article::where('is_accepted', NULL)->orderBy('created_at', 'desc')->get();
        return view('revisor.index', compact('articles_to_check'));
    }
    public function show(Article $article)
    {

        return view('revisor.show', compact('article'));
    }
    public function acceptArticle(Article $article)
    {
        $article->setAccepted(true);
        return redirect('revisor/index')->with('articleAccepted', 'Hai accettato l\'articolo');
    }
    public function rejectArticle(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with('articleRejected', 'Hai rifiutato l\'articolo');
    }
    public function undo()
    {
        $article = Article::where('is_accepted', '!=', NULL)->orderBy('updated_at', 'DESC')->first();
        $article->setAccepted(NULL);
        return redirect()->back()->with('actionUndone', 'Hai resettato l\'articolo');
    }
}
