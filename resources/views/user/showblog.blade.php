@extends('subpage')

@section('title', 'Blog')

@section('content')

  
  <hr class="noscreen" />
  <h1 id="title">blog</h1>
  
  

  <div class="content box">
    <div class="content-in box">

  @isset($blogs)
    @foreach ($blogs as $blog)
              <dl>
              <dt>titolo: {{ $blog->title_blog }} - id: {{ $blog->blogId }}</dt> 
                  <a>#tag 1 : {{ $blog->tag_1 }}</a>
                  <a>|  #tag 2 : {{ $blog->tag_2 }}</a>
                  <a>|  #tag 3 : {{ $blog->tag_3 }}</a>
                  <a>|  creato il : {{ $blog->created_at}}</a> 
                 
             | <a href="{{route('create.post', $blog->blogId)}}">aggiungi post</a></p>

             <p>{!! $blog->desc !!}</p>

            </dl>
    @endforeach
  @endisset()

        @isset($posts)
        <h2>Posts</h2>
        @foreach ($posts as $p)
        <dl>  
                <dd> titolo: <strong>{{ $p->title }}</strong> | id: <strong>{{ $p->postId }}</strong> | autore: <strong>{{ $p->username_post_create }}</strong>
                <a>
                    {{ Form::open(array('route' => array('post.delete', [$p->postId]), 'method' => 'delete')) }}
                    <p class="nomb"> 
                    <a href = "{{route('show.post', $p->postId)}}">visualizza</a> | 
                    {{ Form::submit('elimina post ', ['class' => 'input-submit', 'id' => 'delete-post']) }}
                    </p>
                    {{ Form::close() }}
                    </a>
                    <dd>
                <p>{!! $p->headline !!}</p>
              
        </dl>
                  <p align="center"> -- </p> 
                @endforeach
                @include('pagination.paginator', ['paginator' => $posts])
        @endisset

@endsection



