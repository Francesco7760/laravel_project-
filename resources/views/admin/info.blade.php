@extends('subpage')

@section('title', 'Info')


@section('content')

<hr class="noscreen" />
  <h1 id="title">Informazioni sul sito</h1>
  
  <div class="content box">
    <div class="content-in box">


  @isset($n_blog)
  @isset($n_post)
  @isset($avg_follower)
  @isset($avg_post)
  <h2>Informazioni sul sito </h2>
  
   <dl>
   
                        <dt>numero totali blog  : {{ $n_blog }}</dt>
                        <dt>numero totali post : {{ $n_post }}</dt>
                        <dt>valor medio di post per blog : {{ $avg_post }}</dt>
                        <dt>valor medio di follower per blog : {{ $avg_follower }}</dt>
                        
       
</dl>
    @endisset()
    @endisset()
    @endisset()
  @endisset()
</div>
</div>

@endsection


