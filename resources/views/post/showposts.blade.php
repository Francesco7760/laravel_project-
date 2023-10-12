@extends('subpage')

@section('title', 'Posts')

@section('content')

 <hr class="noscreen" />
  <h1 id="title">post</h1>
  
 

  <div class="content box">
    <div class="content-in box">

  @isset($posts)
        @foreach ($posts as $post)
                    <ul>
    
                        <li>Titolo post: {{ $post->title }}</li>
                        <li>Blog : {{ $post->title_blog }}</li>
                        
                   
                        <a>visualizza</a>
                    
                    </ul
        @endforeach

    @endisset()
 
@endsection

