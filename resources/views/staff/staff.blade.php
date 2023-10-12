@extends('subpage')

@section('title', 'Area Staff')

@section('content')

<hr class="noscreen" />
  <h1 id="title">Area Staff</h1>

<div class="content box">
    <div class="content-in box">
      <div class="perex">
        <p>Benvenuto  {{ Auth::user()->name }}  {{ Auth::user()->surname }} |
           Username : {{Auth::user()->username}} | Email : {{Auth::user()->email}}</p>
      </div>

      <dl>
        <dt>un utente Staff può:</dt> 
      
        <dt>1 | Creare un nuovo post </dt>
        <dt>2 | Eliminare post esistenti </dt>
        <dt>3 | Eliminare un blog </dt>
        <dt>4 | Inviare un messaggio al utente, per giustificare la cancellazione</dt>
        </dl>


@endsection
