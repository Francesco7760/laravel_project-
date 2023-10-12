@extends('subpage')

@section('title', 'Uers')

@section('content')

<hr class="noscreen" />
  <h1 id="title">Utenti registrati</h1>
  
  <div class="content box">
    <div class="content-in box">

  @isset($users)
  @include('pagination.paginator', ['paginator' => $users])
    @foreach ($users as $user)
    <dl>
                       <div class="perex"> <p align="center">{{ $user->username }}</p> </div>
                        <p>Nome: <strong>{{ $user->name }}</strong> , <strong>{{ $user->surname }}</strong>
                         | Username: <strong>{{ $user->username }}</strong> | Ruolo: <strong>{{ $user->role }}</strong>
                         | Email utente: <strong>{{ $user->email }}</strong> | <a href="mailto:{{ $user->email }}">contatta</a> | 
                <a href="{{ route('edit.user', [$user->username]) }}">modifica utente</a></p>
              </dt>
                {{ Form::open(array('route' => array('delete.user', [$user->username]), 'method' => 'delete')) }}
               
                {{ Form::submit('elimina utente', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
               
                {{ Form::close() }}
</dl>
    @endforeach
    @include('pagination.paginator', ['paginator' => $users])
  @endisset()
@endsection

