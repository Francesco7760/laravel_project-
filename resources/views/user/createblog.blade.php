@extends('form')

@section('title', 'Crea blog')

@section('content')
<div id = "respond">
    <h3>Crea blog</h3>
</div>

            {{ Form::open(array('route' => 'store.blog', 'method' => 'post')) }}
            <div class="box-01" >

            <p class="nomt"><strong>Titolo (obbligatorio):</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('title_blog', '', ['class' => 'input', 'id' => 'title_blog']) }}
                
                @if ($errors->first('title_blog'))
                
                    @foreach ($errors->get('title_blog') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
                
                <p ><strong>argomento n. 1 (obbligatorio):</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('tag_1', '',['class' => 'input', 'id' => 'tag_1']) }}
                
                @if ($errors->first('tag_1'))
                
                    @foreach ($errors->get('tag_1') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
                
                <p ><strong>argomento n. 2 (obbligatorio):</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('tag_2', '', ['class' => 'input', 'id' => 'tag_2']) }}
                
                @if ($errors->first('tag_2'))
                
                    @foreach ($errors->get('tag_2') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
                
                <p ><strong>argomento n. 3 (obbligatorio):</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('tag_3', '', ['class' => 'input', 'id' => 'tag_3']) }}
                
                @if ($errors->first('tag_3'))
                
                    @foreach ($errors->get('tag_3') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p ><strong>descrizione (obbligatorio):</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::textarea('desc', '', ['class' => 'input', 'id' => 'desc']) }}
                
                @if ($errors->first('desc'))
                
                    @foreach ($errors->get('desc') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
            

            <p class="nomb">  
                {{ Form::submit('Conferma', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                </p>
            </div>

            {{ Form::close() }}
     
@endsection


