@extends('subpage')

@section('title', 'Area Amministratore')

@section('content')

<hr class="noscreen" />
  <h1 id="title">Area Amministartore</h1>

<div class="content box">
    <div class="content-in box">
      <div class="perex">
        <p>Benvenuto  {{ Auth::user()->name }}  {{ Auth::user()->surname }} |
           Username : {{Auth::user()->username}} | Email : {{Auth::user()->email}}</p>
      </div>

      <dl>
        <dt>un utente Amministratore può:</dt> 
      
        <dt>1 | Gestire (inserire/cancellare/modificare) utenti e staff del sito </dt>
        <dt>2 | Elenco utenti che seguono un blog</dt>
        <dt>3 | Numero dei blog </dt>
        <dt>4 | Valor medio di post di un singolo blog </dt>
        <dt>5 | Valor medio di utenti che seguono un blog</dt>
        </dl>



@endsection
