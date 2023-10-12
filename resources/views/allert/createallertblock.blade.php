        
@extends('form')

@section('title', 'Blocco blog')

@section('content')

@isset($blogId)
<div id = "respond">
    <h3>Aggiungi il motivo del blocco </h3>
</div>

            {{ Form::open(array('route' =>array('create.allert.store', [$blogId]) , 'id' => 'createallertblock','method' => 'post')) }}
            <div class="box-01" >

            <p><strong>Causa (max 200):</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::textarea('cause', 'il blog è stato blocacto, perchè non rispetta i termini e le condizioni di utilizzo, imposte dal sito', ['class' => 'input', 'id' => 'title']) }}
                </p>

            <p class="nomb">  
                {{ Form::submit('invia avviso', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                </p>
            </div>

            {{ Form::close() }}
      
@endisset

@endsection


