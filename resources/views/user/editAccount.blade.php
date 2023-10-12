@extends('form')

@section('title', 'Modifica account')

@section('content')

@isset($user)
@foreach ($user as $u)
<div id = "respond">
    <h3>Modifica il tuo account</h3>
    <p>Inserisci i nouvi campi</p>
</div>
            {{ Form::open(array('route' => 'update.account', 'method' => 'put', 'files' => true)) }}
            <div class="box-01" >
            <p class="nomt"><strong>Nome:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('name', $u->name, ['class' => 'input', 'id' => 'name']) }}
                
                @if ($errors->first('name'))
                
                    @foreach ($errors->get('name') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p ><strong>Cognome:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('surname', $u->surname,['class' => 'input', 'id' => 'surname']) }}
                
                @if ($errors->first('surname'))
                
                    @foreach ($errors->get('surname') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p ><strong>Username:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('username', $u->username, ['class' => 'input', 'id' => 'username']) }}
                
                @if ($errors->first('username'))
                
                    @foreach ($errors->get('username') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p ><strong>Email:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::email('email', $u->email, ['class' => 'input', 'id' => 'email']) }}
                
                @if ($errors->first('email'))
                
                    @foreach ($errors->get('email') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p ><strong>Foto account:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
                
                 @if ($errors->first('image'))
                
                    @foreach ($errors->get('image') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
            
            <p class="nomb"> 
                {{ Form::submit('Conferma ', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
             </p>
            </div>

            {{ Form::close() }}
    @endforeach
@endisset
@endsection
