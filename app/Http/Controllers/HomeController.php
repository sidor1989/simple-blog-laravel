<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Category;
use App\Tag;

class HomeController extends Controller
{


    public function index()
    {
        $articles = Article::paginate(3);

        return view('index')->with(compact('articles'));
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $articles = $tag->articles()->paginate(2);


        return view('inner')->with(compact('articles'));;
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $articles = $category->articles()->paginate(2);


        return view('inner')->with(compact('articles'));
    }
    public function article($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $comments = $article->getThreadedComments();

        return view('pages.article')->with(compact('article','comments'));
    }

    public function search(Request $request){

        $request->validate([
            'q' => 'required|min:3'
        ]);

        $articles = Article::where('title', 'LIKE','%'.$request->input('q').'%')->paginate(2);

        return view('inner')->with(compact('articles'));
    }
}
