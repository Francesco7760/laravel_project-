@extends('subpage')

@section('title', 'Follower')

@section('content')
  <hr class="noscreen" />
  <h1 id="title">i tuoi follower</h1>
  
  <div class="content box">
    <div class="content-in box">


  @isset($follower)
    @foreach ($follower as $seg)
            <dl>  
              <div class="perex">
                        <dt>follower : {{ $seg->follower}}</dt>
              </div>
                        <p>blog seguito:<strong> {{ $seg->title_blog}}</strong></p>
                        <p>id blog :<strong> {{ $seg->blogId}}</strong></p>
                          
                            {{ Form::open(array('route' => array('delete.follower', [$seg->followerId]), 'method' => 'delete')) }}
                            {{ Form::submit('elimina follower ', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                            {{ Form::close() }}
            </dl>               
    @endforeach

  @endisset()

@endsection


