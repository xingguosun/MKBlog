<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticleController extends Controller
{
    //
    public function index(Request $request){
        $list = [];
        if($request->timeDesc && $request->take){
            $list = Article::orderBy('created_at', 'desc')->take($request->take)->get();
        }elseif($request->searchByTag){

        }elseif($request->searchByTitle){
            
        }else{
            $list = Article::all();
        }
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }
      return $list;
    }
    // public function show($id){
    //     return view('article/show')->withArticle(Article::with('hasManyComments')->find($id));
    // }
    public function show($id){
        $article = Article::with('hasManyComments')->findOrFail($id);
        return $article;
    }
}
