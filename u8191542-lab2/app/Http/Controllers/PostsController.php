<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use \Illuminate\Support\Facades\DB;
use App\Models\Tag;

class PostsController extends Controller
{
    public function posts(Request $request){
        $articles2=Article::all();
        $tags=Tag::all();

        if($request->has('title')){
            $articles=Article::where('title',$request->title)->simplepaginate(5);
        }else if($request->has('character_code')){
            $articles=Article::where('character_code',$request->character_code)->simplepaginate(5);
        }else if($request->has('tag_id')){
            $id=$request->tag_id;
            $articles=Tag::find($id)->articles()->simplepaginate(5); 
        }else{
            $articles=Article::simplepaginate(5);
        }

        return view('posts',compact('articles','articles2','tags'));
    }

    public function post($id){
        $article=DB::table('articles')->find($id);
        $tags=Article::find($id)->tags()->orderBy('title')->get();  

        return view('post',compact('article','tags'));
    }
}
