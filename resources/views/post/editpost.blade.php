@extends('form')

@section('title', 'Modifica post')

@section('content')

@isset($post)
@foreach ($post as $p)
<div id = "respond">
    <h3>Modifica post {{$p->title}}</h3>
    <p>Inserisci i nouvi campi</p>
</div>
            {{ Form::open(array('route' => array('update.post', $p->postId), 'id' => 'editpost' ,'method' => 'put')) }}
            <div class="box-01" >
            <p class="nomt"><strong>Titolo:</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('title', $p->title , ['class' => 'input', 'id' => 'title']) }}
                
                @if ($errors->first('subtitle_2'))
                
                    @foreach ($errors->get('subtitle_2') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p ><strong>Nuova testata:</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('headline', $p->headline,['class' => 'input', 'id' => 'headline']) }}
                
                @if ($errors->first('headline'))
                
                    @foreach ($errors->get('headline') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p ><strong>Primo paragrafo:</strong><br />
                {{ Form::label('', '  ', ['class' => 'label-input']) }}
                {{ Form::textarea('contenuto_1', $p->contenuto_1, ['class' => 'input', 'id' => 'contenuto_1']) }}
                
                @if ($errors->first('contenuto_1'))
                
                    @foreach ($errors->get('contenuto_1') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p ><strong>Primo sottotitiolo:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('subtitle_1', $p->subtitle_1, ['class' => 'input', 'id' => 'subtitle_1']) }}
                
                @if ($errors->first('subtitle_1'))
                
                    @foreach ($errors->get('subtitle_1') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p ><strong>Secondo sottotitolo:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('subtitle_2', $p->subtitle_2, ['class' => 'input', 'id' => 'subtitle_2']) }}
                
                @if ($errors->first('subtitle_2'))
                
                    @foreach ($errors->get('subtitle_2') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif

                <p ><strong>Secondo paragrafo:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::textarea('contenuto_2', $p->contenuto_2, ['class' => 'input', 'id' => 'contenuto_2']) }}
                
                @if ($errors->first('contenuto_2'))
                
                    @foreach ($errors->get('contenuto_2') as $message)
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
