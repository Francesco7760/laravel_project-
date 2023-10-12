
@extends('form')

@section('title', 'New user')

@section('content')

<div id = "respond">
    <h3>Crea utente</h3>
    <p>Inserisci i tuoi dati per registrare un nuovo utente</p>
</div>
            {{ Form::open(array('route' => 'store.user', 'id' => 'createuser','class' => 'contact-form')) }}
            <div class="box-01" >
            <p class="nomt"><strong>Name:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                
                @if ($errors->first('name'))
                
                    @foreach ($errors->get('name') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
                
                <p ><strong>Cognome:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname']) }}
                
                @if ($errors->first('surname'))
                
                    @foreach ($errors->get('surname') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
          

                <p><strong>Email:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('email', '', ['class' => 'input','id' => 'email']) }}
                
                @if ($errors->first('email'))
                
                    @foreach ($errors->get('email') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p><strong>Username:</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                
                @if ($errors->first('username'))
                
                    @foreach ($errors->get('username') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p><strong>Password:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::password('password', array('placeholder'=>'Password', 'class'=>'form-control',  'id' => 'password' ) ) }}
                
                @if ($errors->first('password'))
                
                    @foreach ($errors->get('password') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
            

            <p class="nomb">  
                {{ Form::submit('Aggiungi utente ', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                </p>
            </div>

            {{ Form::close() }}
@endsection
