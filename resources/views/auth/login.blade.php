@extends('form')

@section('title', 'Registrazione')

@section('content')
    <h2>Login</h2>
    <p>Inserisci i tuoi dati per autenticarti al sito</p>
    <div  >
                 <p> Se non hai già un account <a  href="{{ route('register') }}">registrati</a></p>
             </div> 

    {{ Form::open(array('route' => 'login', 'class' => 'contact-form')) }}
        <div class="box-01">
          <p class="nomt"><strong>Username:</strong><br />
          {{ Form::label('', '', ['class' => 'label-input']) }}
          {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
          </p>

           @if ($errors->first('username'))
            @foreach ($errors->get('username') as $message)
            <li>{{ $message }}</li>
                @endforeach
            @endif

          <p><strong>Password:</strong><br />
          {{ Form::label('', '', ['class' => 'label-input']) }}
          {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
            
          </p>
          
          @if ($errors->first('password'))
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                
                @endif
         
          <p class="nomb">
           {{ Form::submit('Login', ['class' => 'input-submit']) }}
          </p>
        </div>
        {{ Form::close() }}

@endsection
