
@extends('form')

@section('content')

<div id = "respond">
    <h3>Modifica account</h3>
    <p>Inserisci i nuovi dati</p>
</div>
@isset($user)
    @foreach($user as $us)
            {{ Form::open(array('route' => array('update.user', $us->username , 'class' => 'contact-form'), 'id' => 'eidituser', 'method' => 'put')) }}
            <div class="box-01" >
            <p class="nomt"><strong>Nome:</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('name', $us->name, ['class' => 'input', 'id' => 'name']) }}
                
                @if ($errors->first('name'))
               
                    @foreach ($errors->get('name') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p ><strong>Cognome:</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('surname', $us->surname,['class' => 'input', 'id' => 'surname']) }}
                
                @if ($errors->first('surname'))
                
                    @foreach ($errors->get('surname') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p class="nomt"><strong>Email:</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::email('email', $us->email, ['class' => 'input', 'id' => 'email']) }}
                
                @if ($errors->first('email'))
                
                    @foreach ($errors->get('email') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p class="nomt"><strong>Username:</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('username', $us->username, ['class' => 'input', 'id' => 'username']) }}
                
                @if ($errors->first('username'))
                
                    @foreach ($errors->get('username') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p class="nomb"> 
                {{ Form::submit('conferma modifiche ', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                </p>
                
            </div>
            
            {{ Form::close() }}
            @endforeach
  @endisset()
@endsection
