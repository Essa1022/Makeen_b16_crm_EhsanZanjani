<?php

namespace App\Http\Controllers;

use App\Http\Requests\Articles\CreateArticleRequest;
use App\Http\Requests\Articles\EditArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = DB::table('articles')->get();
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('articles.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateArticleRequest $request)
    {
        DB::table('articles')->insert([
            "title" => $request->title,
            "author" => $request->author,
            "category_id" => $request->category_id,
            "text" => $request->text,
        ]);
        return redirect()->route('articles.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = DB::table('categories')->get();
        $article = DB::table('articles')->where('id', $id)->first();
        return view('articles.edit', ['article' => $article, 'categories'=> $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditArticleRequest $request, string $id)
    {
        DB::table('articles')->where('id', $id)->update([
            "title" => $request->title,
            "author" => $request->author,
            "category_id" => $request->category_id,
            "text" => $request->text,
        ]);
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('articles')->where('id', $id)->delete();
        return redirect()->route('articles.index');
    }
}
