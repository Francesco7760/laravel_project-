@extends('subpage')

@section('title', 'Post')

@section('content')

<hr class="noscreen" />
  <h1 id="title">Post</h1>
  
  <div class="content box">
    <div class="content-in box">

  @isset($posts)

    @foreach ($posts as $post)
                    <dl>
                        <dt>Titolo Post : {{ $post->title }}</dt>
                        <dd>Autore :<strong> {{ $post->username_post_create }}</strong></dd>
                        <dd>identificativo :<strong> {{ $post->postId }}</strong></dd>
                    <div class="perex">
                        <p align="center"><strong>{!! $post->headline !!}</strong></p>
                    </div>
                        <p>{!! $post->contenuto_1 !!}</p>
                    <div>    
                        <p align="center"><strong>{{$post->subtitle_1}}</strong></p>
                    </div>
                        <p>{!! $post->contenuto_2 !!}</p>
                    <div>
                        <p align="center"><strong>{{$post->subtitle_2}}</strong></p>
                    </div>
                        
                        @can('isUser')
                        @if(Auth::user()->username == $post->username_post_create)
                        <p align="right"><a href="{{route('edit.post', $post->postId)}}">modifica</a></p>
                        @endcan 
                        @endif
                        @can('isStaff')
                        <p align="right"><a href="{{route('edit.post.staff', $post->postId)}}">modifica</a></p>
                        @endcan
                        @can('isAdmin')
                        <p align="right"><a href="{{route('edit.post.admin', $post->postId)}}">modifica</a></p>
                        @endcan

                        <p align="left">ultima modifica : {{$post->updated_at}} | creato : {{$post->created_at}}</p>
                      

</dl>
    @endforeach

  @endisset()

@endsection


