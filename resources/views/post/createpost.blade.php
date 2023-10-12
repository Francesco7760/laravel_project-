        
@extends('form')

@section('title', 'Aggiungi post')

@section('content')

@isset($blogId)
<div id = "respond">
    <h3>Aggiungi post</h3>
</div>

            {{ Form::open(array('route' =>array('create.post.store', [$blogId]) ,'id' => 'createpost' ,'method' => 'post')) }}
            <div class="box-01" >
            <p class="nomt"><strong>Titolo:</strong><br />

                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('title', '', ['class' => 'input', 'id' => 'title']) }}
            
                @if ($errors->first('title'))
                
                    @foreach ($errors->get('title') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
                
                <p ><strong>Testata:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::textarea('headline', '',['class' => 'input', 'id' => 'headline']) }}
                
                @if ($errors->first('headline'))
                
                    @foreach ($errors->get('headline') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
                
                <p ><strong>Primo paragrafo:</strong><br />
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::textarea('contenuto_1', '', ['class' => 'input', 'id' => 'contenuto_1']) }}
                
                @if ($errors->first('contenuto_1'))
                
                    @foreach ($errors->get('contenuto_1') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
                
                <p ><strong>sottotitolo:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('subtitle_1', '', ['class' => 'input', 'id' => 'subtitle_1']) }}
                
                @if ($errors->first('subtitle_1'))
               
                    @foreach ($errors->get('subtitle_1') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
                
                <p ><strong>Secondo paragrafo:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::textarea('contenuto_2', '', ['class' => 'input', 'id' => 'contenuto_2']) }}
                
                @if ($errors->first('contenuto_2'))
                
                    @foreach ($errors->get('contenuto_2') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
                
                <p ><strong>sottotitolo:</strong><br />
                {{ Form::label('', '', ['class' => 'label-input']) }}
                {{ Form::text('subtitle_2', '', ['class' => 'input', 'id' => 'subtitle_2']) }}
                
                @if ($errors->first('subtitle_2'))
                
                    @foreach ($errors->get('subtitle_2') as $message)
                    | {{ $message }}</p>
                    @endforeach
                
                @endif
            

            <p class="nomb">  
                {{ Form::submit('Aggiungi Post ', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                </p>
            </div>

            {{ Form::close() }}
      
@endisset

@endsection


