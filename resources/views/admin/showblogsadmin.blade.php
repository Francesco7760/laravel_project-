@extends('subpage')

@section('title', 'Blogs')


@section('content')

 <hr class="noscreen" />
  <h1 id="title">Blogs presenti nel sito</h1>
  
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
              </dl>
              <p>{!! $blog->desc !!}</p>
    <p align="right"><a href="{{route('show.blog.admin', $blog->blogId)}}">visualizza</a></p>
    @endforeach


  @endisset()

@endsection


