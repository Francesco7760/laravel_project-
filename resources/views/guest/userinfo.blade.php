@extends('subpage')

@section('title', 'User Info')

@section('content')

  <hr class="noscreen" />
  <h1 id="title">Info</h1>
  
  <div class="content box">
    <div class="content-in box">
            
  @isset($user)
    @foreach($user as $us)  
    <ul> 
      
        <li>nome : {{$us->name}}</li>
        <li>cognome : {{$us->surname}}</li>
        <li>id : {{$us->id}}</li>
        <li>surname :{{$us->surname}}
      </ul>

      @endforeach
 @endisset()

 @isset($blog)
 <h2>i suoi blog</h2>
    @foreach($blog as $b)
 
    <dl>
                  <dt>titolo: {{ $b->title_blog }} - id: {{ $b->blogId }}</dt> 
                  <a>#tag 1 : {{ $b->tag_1 }}</a>
                  <a>|  #tag 2 : {{ $b->tag_2 }}</a>
                  <a>|  #tag 3 : {{ $b->tag_3 }}</a>
                  <a>|  creato il : {{ $b->created_at}}</a>
              </dl>
              <p>{!! $b->desc !!}</p>
       @can('isUser')
       @isset($seguito)
         @if ($seguito == 0)
            
           <p> <a href = "{{route('send.request', [$b->blogId])}} " >invia richiesta</a> </p>
          
          @elseif($seguito == 1)
            
             <p>seguito</p>

          @endif
          @endisset()
       @endcan

     @endforeach
 @endisset()
      
    @endsection