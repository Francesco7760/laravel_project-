@extends('subpage')

@section('title', 'My Post')


@section('content')

  <hr class="noscreen" />
  <h1 id="title">I miei post</h1>
  
  <div class="content box">
    <div class="content-in box">

  @isset($myposts)
  @if(count($myposts) == 0)
     <ul><li>non hai aggiunto post</li></ul>
  @else
    @foreach ($myposts as $mypost)
            <dl>  
                    <div class="perex">
                        <dt>{{ $mypost->title }}</dt>        
                    </div>
                        <p>id:<strong> {{ $mypost->postId }}</strong> | blog: <strong>{{ $mypost->title_blog }}</strong> </p>
                        <p>{!! $mypost->headline !!}</p>
                   </dl> 
                        <p align="right"><a href="{{route('show.mypost', $mypost->postId)}}">visualizza</a></p>
                          <p>Aggiornato: {{$mypost->updated_at}}</p>
    @endforeach
  @endif
   @include('pagination.paginator', ['paginator' => $myposts])
  @endisset()
@endsection


