@extends('subpage')

@section('title', 'Search process')

@section('content')

  <hr class="noscreen" />
  <h1 id="title">Risultato ricerca</h1>
  
  <div class="content box">
    <div class="content-in box">

  @isset($users)
  <div class="perex">
    <p align="center">Utenti ottenuti </p>
</div>
    @if (count($users) == 0)

    <dl><dt><p align="center">nessun utente trovato</p></dt></dl>

    @else 
        @foreach ($users as $user)
            <dl>
            @php 
        if (empty(Auth::user()->image)){
            $img = 'user.png';
        } else {
            $img = Auth::user()->image;
        }

        if(empty(Auth::user()->role)){
          $islogged = false;
        }else {
          $islogged = true;
        }
    @endphp
    
                        @if ($islogged)
                        <dt><img id="account-image" src="{{ asset('images/users/' . $img) }}" class="f-left">
                       
                        
                        <dt>Nome utente: {{ $user->name }} | Cognome utente: {{ $user->surname }}</dt>
                        <dt >Username: {{ $user->username }}</dt>
                        <dt>Ruolo: {{ $user->role }}</dt>
                        <dt>Email utente: {{ $user->email }}</dt>
                        
                        @else
                        <dt>Nome utente: {{ $user->name }} | Cognome utente: {{ $user->surname }}</dt>
                        <dt >Username: {{ $user->username }}</dt>
                        
                        @endif
                        <dt><a title="visualizza il profilo e i suoi  blog " href = "{{route('show.user.info', [$user->id, $user->username])}}">visualizza</a></dt>
                      </dl>    
        @endforeach
    @endif
  @endisset()
@endsection