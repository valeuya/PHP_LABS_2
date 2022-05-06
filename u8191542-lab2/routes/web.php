<?php

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use \Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/', [PostsController::class, 'posts'])->name('posts.posts');

Route::get('posts/{code}', [PostsController::class, 'post']);
// Route::get('posts/{code}', function ($id) {
//     $article=DB::table('articles')->find($id);
//     return view('post',compact('article'));
// });
// $articles=Article::all();
// $tags=Tag::all();
// foreach($tags as $tag){
//     echo 'Tag:'.$tag['title'].'<br>';
//     echo '<b>Article:</b><br>';
//     foreach($tag->articles as $article){
//         echo $article['title'].'<br>';
//     }
//     echo '------------<br>';
// }