        
@extends('form')

@section('title', 'Blocco blog')

@section('content')

@isset($blogId)
<div id = "respond">
    <h3>Aggiungi il motivo dello sblocoo</h3>
</div>

            {{ Form::open(array('route' =>array('create.allert.store', [$blogId]) , 'id' => 'createallertunlock','method' => 'post')) }}
            <div class="box-01" >
            <p class="nomt"><strong>Causa (max 200):</strong><br />

                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::textarea('cause', 'dopo la modifica effetuata, il blog rispetta i termini e le condizioni imposte dal sito', ['class' => 'input', 'id' => 'title']) }}
                </p>

            <p class="nomb">  
                {{ Form::submit('invia avviso ', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                </p>
            </div>

            {{ Form::close() }}
      
@endisset

@endsection


