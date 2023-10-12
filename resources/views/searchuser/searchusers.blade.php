@extends('form')

@section('title', 'Search')

@section('content')
<div class="col50">

<div id = "respond">

    <h3>Cerca</h3>
    <p>Inserisci Nome, Cognome o Username</p>
</div>
            {{ Form::open(array('route' => array('search.users.proces', 'class' => 'contact-form'), 'id' => 'searchuser','method' => 'put')) }}
            <div  class="box-01">
            <p class="nomt"><strong>Name:</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                </p>
                

                <p><strong>Cognome:</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('surname', '',['class' => 'input', 'id' => 'surname']) }}
                </p>
                

                <p><strong>Username:</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input', 'id' => 'username']) }}
                </p>
                
           
            
                <p class="nomb">  
                {{ Form::submit('CERCA ', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                </p >
            </div>

            {{ Form::close() }}

            </div>
            <div class="col50 f-right">
             <p class="small"><b>ATTENZIONE</b></p>
                <ul><li>per effettuare la ricerca, uutilizza i 3 cambi.</li></ul>        
                <dl>
                <dt>search</dt>
                <dd>per cercare i tuoi amici, inserisci il nome, il cognome e username di chi stai cercando.</dd>
          <dd>la ricerca andrà a buon fine, anche se utilizzi solo alcuni dei campi messi a disposizione.</dd>
          <dd>non ricordi il nome o l'username completi ?? non ti preoccupare insersci una porzione delle parola, i risulatato ti sconvolgerà</dd>       
                </dl>
            </div>
       
@endsection
  