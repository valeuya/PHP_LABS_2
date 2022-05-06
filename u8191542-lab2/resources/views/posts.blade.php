@extends('layouts.app')
@section('title-block')
    Posts
@endsection
@section('content')
<div class="container">
<form method="get" action="{{ route('posts.posts') }}" >
           
            <div class="titles">
                <div class="form-label">Choose title</div>
                <select name="title" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option></option>
                    @foreach($articles2 as $article2)
                    <option value="{{$article2->title}}" @if(isset($_GET['title'])) @if($_GET['title'] == $article2->title) selected @endif @endif>{{$article2->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>

          
        </form>
        <form method="get" action="{{ route('posts.posts') }}" >
            <div class="character_code">
                <div class="form-label">Choose character_code</div>
                <select name="character_code" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option></option>
                    @foreach($articles2 as $article2)
                    <option value="{{$article2->character_code}}" @if(isset($_GET['character_code'])) @if($_GET['character_code'] == $article2->character_code) selected @endif @endif>{{$article2->character_code}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
        
        <form method="get" action="{{ route('posts.posts') }}" >
            <div class="tag">
                <div class="form-label">Choose tag</div>
                <select name="tag_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option></option>
                    @foreach($tags as $tag)
                    <option value="{{$tag->id}}" @if(isset($_GET['tag_id'])) @if($_GET['tag_id'] == $tag->id) selected @endif @endif>{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    <br>
    {{$articles->links()}}
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">character_code</th>
                <th scope="col">date__of_creation</th>
                <th scope="col">content</th>
                <th scope="col">author</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                
                <td>{{$article->id}}</td>
                <td><a href="posts/{{$article->id}}">{{$article->title}}</td>
                <td>{{$article->character_code}}</td>
                <td>{{$article->date__of_creation}}</td>
                <td>{{$article->content}}</td>
                <td>{{$article->author}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection