@extends('layouts.app')
@section('title-block')
    Posts
@endsection
@section('content')
<div class="container">
    <tr>
        <td>Tags: </td>
    </tr>  
    @foreach($tags as $tag)
    <tr>
        <td>{{$tag->title}},</td>
    </tr>        
    @endforeach
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
            
            <tr>
                
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->character_code}}</td>
                <td>{{$article->date__of_creation}}</td>
                <td>{{$article->content}}</td>
                <td>{{$article->author}}</td>
            </tr>
       
        </tbody>
    </table>
</div>

@endsection