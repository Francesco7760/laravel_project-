@extends('subpage')

@section('title', 'Area User')

@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ asset('js/myfunctions.js')}}"></script>
@endsection

@section('content')
  <hr class="noscreen" />
  <h1 id="title">Area Riservata</h1>
  <div id="content-box" class="content box">
    <div class="content-in box">
      <div class="perex">
        <p>Benvenuto  {{ Auth::user()->name }}  {{ Auth::user()->surname }} </p>
           
            <p>Username : {{Auth::user()->username}} | Email : {{Auth::user()->email}}</p> 
        
      </div>
    @php 
        if (empty(Auth::user()->image)){
            $img = 'user.png';
        } else {
            $img = Auth::user()->image;
        }
    @endphp
    
    <p><img id="account-image" src="{{ asset('images/users/' . $img) }}" class="f-left">
    <p><a href="{{route('edit.account')}}">Modifica account </a></p>

          {{ Form::open(array('route' => array('create.blog'), 'method' => 'get')) }}
            {{ Form::submit('crea un nuovo blog ', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
            {{ Form::close() }}
      </div>
      </div>
      
      
            <!-- -->
            <div class="cols3">
    <div class="cols3-content box">
      <!-- Column -->
      <div class="col">
        <h2><a id="notifiche">Notifiche | ({{count($notifications)}})</a></h2>
       
        <nav class="noscreen" id="mostra-notifiche">
        <p class="smaller" id="desc-notifications"><strong>Qui troverai tutte le ultime novità.</strong>ogni volta che in un blog, da te seguito, sarà aggiunto un post, ti arriverà messaggio per fartelo sapere.  <p>
          @isset($notifications)
        
          <p  align="center"><strong>Notifiche</strong></p>
      @if(count($notifications) == 0)
        <ul>
          <li><a>non ci sono notifiche</a></li>
        </ul>
      @else
        @foreach($notifications as $not)   
        <ul>
          <li><b>l' utente {{$not->sender}} ha aggiunto un nuovo post </b> | per il blog numero {{$not->title_blog}}, ora: {{$not->created_at}}</li>
          <a>
          {{ Form::open(array('route' => array('read_notify', [$not->notifyId]), 'method' => 'put')) }}
                            {{ Form::submit('elimina notifica', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                            {{ Form::close() }}
          </a>
        </ul>
        @endforeach
      @endif 
        </nav>
    @endisset()
        
      </div>
      <!-- /col -->
      <!-- Column -->
      <div class="col">
        <h2><a id="richieste">Richieste | ({{count($request)}})</a></h2>
        
       <nav class="noscreen" id="mostra-richieste">  
        <p class="smaller" id="disc-requests"><strong>Qui troverai tutte le ultime richieste ricevute.</strong>ogni volta che un utente ti chiede di seguire un tuo blog, ti arriverà un messaggio per aggiornarti <p>
          @isset($request)

 <p align="center"><strong>Rchieste</strong></p>
   @if(count($request) == 0)
   <ul>
     <li><a>non ci sono richieste</a></li>
   </ul>
   @else 
    @foreach($request as $req)
      
      <p> l' utente </b>{{$req->sender}}</b> ha chiesto di seguire il blog {{$req->title_blog}} </a></p>
        <ul>
        <li>{{ Form::open(array('route' => array('create.follower', [$req->blogId, $req->sender ,$req->requestId]), 'method' => 'put')) }}
                            {{ Form::submit('accetta richiesta', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                            {{ Form::close() }}
        </li>
        <li>{{ Form::open(array('route' => array('delete.request', [$req->requestId]), 'method' => 'put')) }}
                            {{ Form::submit('rifiuta richiesta', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                            {{ Form::close() }}
      </li>
      </ul>
      
     @endforeach
     @endif
      </nav>
@endisset()
      </div>
      <!-- /col -->
      <!-- Column -->
      <div class="col last">
        <h2><a id="avvisi">Avvisi/Segnalazioni  |  ({{count($allert)}})</a></h2>
       
        <nav class="noscreen" id="mostra-avvisi">
        <p class="smaller" id="desc-allert"><strong>qui troverai tutti gli avvisi da parte della amministrazione del sito</strong>ogni volta che l'amministratore del sito, dovrà comunicarti qualcosa, ti arriverà un suo messaggio </p>
        <ul>
        @isset($allert)

<p align="center"><strong>Avvisi</strong></p>
  @if(count($allert) == 0)
  <ul>
     <li><a>non ci sono avvisi</a></li>
   </ul>
   @else 
    @foreach($allert as $all)   
      <ul>
        <li><b>il blog id: {{$all->blogId}} è stato seganalato</b> |  {{$all->cause}}, ora: {{$all->created_at}}</li>
        <a>
        {{ Form::open(array('route' => array('read_allert', [$all->allertId]), 'method' => 'put')) }}
                            {{ Form::submit('elimina avviso', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                            {{ Form::close() }}
         </a>
      </ul>
      @endforeach
      @endif
  </nav>
 @endisset()
        </ul>
      </div>
      <!-- /col -->
    </div>
    <!-- /cols3-content -->
    <div class="cols3-bottom"></div>
  </div>
  <!-- /cols3 -->
            <!-- -->
    
            <div id="content-box" class="content box">
            <div class="content-in box">
     
      <div class="perex">
        <p align="center">I miei Blogs</>
      </div>
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
              
               
                {{ Form::open(array('route' => array('delete.blog.user', [$blog->blogId]), 'method' => 'delete')) }}
                            <p align="right"><a href ="{{route('user.blog', [$blog->blogId])}}" class="meta" >visualizza</a> |
                {{ Form::submit('elimina blog ', ['class' => 'input-submit', 'id' => 'sub-btn']) }}</p>
                            {{ Form::close() }}
        @endforeach
        @endisset


        @isset($follower)
        @if(count($follower) > 0)
          <div class="perex">
          <p align="center">I blog seguiti</p>
          </div>
        
        @foreach($follower as $follo)
              <dl>
                  <dt>titolo: {{ $follo->title_blog }} - id: {{ $follo->blogId }}</dt> 
                  <a>Creatore: {{$follo->created_at}}</a>
                  <a>#{{ $follo->tag_1 }} | #{{ $follo->tag_2 }} | #{{ $follo->tag_3 }}</a>
              </dl>
              <p>{!! $follo->desc !!}
                  <a href ="{{route('user.blog', [$follo->blogId])}}" class="meta" >visualizza</a>

    @endforeach
        @endif
@endisset()
      </div>
      </div>
@endsection

