@extends('form')

@section('title', 'Registrazione')

@section('content')
<div class="col50">

<div id = "respond">

    <h3>Registrazione</h3>
    <p>Inserisci i tuoi dati per registrarti al sito</p>
</div>
    
            {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}

            <div class="box-01" >
            <p class="nomt"><strong>Name:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                <p>
                @if ($errors->first('name'))
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                
                @endif
          

                <p class="nomt" ><strong>Cognome:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname']) }}
                @if ($errors->first('surname'))
               
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
               
                @endif
          
            
                <p class="nomt"><strong>Email:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('email', '', ['class' => 'input','id' => 'email']) }}
                @if ($errors->first('email'))
                
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
              
                @endif
           
            
                <p class="nomt"><strong>Username:</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                @if ($errors->first('username'))
                
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
               
                @endif
           
            
                <p class="nomt"><strong>Password:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                @if ($errors->first('password'))
                
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                
                @endif
           

                <p class="nomt"><strong>Conferma Password:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
           
            
                <p class="nomb">              
                {{ Form::submit('Registra', ['class' => 'input-submit']) }}
                </p>
            </div>
            
            {{ Form::close() }}
            
            </div>
            <div class="col50 f-right">
             <p class="small"><b>ATTENZIONE</b></p>
                <ul><li>per accender al'are riservata, utilizzerai USERNAME e PASSWORD</li></ul>        
                <dl>
                <dt>username</dt>
            <dd>scegli un username che ti contradistingua</dd>
                <dt>password</dt>
                <dd>password deve esser di almeno 8 caratteri, puoi scegliere tra numeri, caratteri normali e speciali. Per la sicurezza del tuo account, crea la tua password con molta attenzione</dd>
                </dl>
            </div>
@endsection
  