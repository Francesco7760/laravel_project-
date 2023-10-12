@extends('subpage')

@section('title', 'Blog and Posts')


@section('content')

 <hr class="noscreen" />
  <h1 id="title">Blog</h1>
  
  <div class="content box">
    <div class="content-in box">

  @isset($blog)
    @foreach ($blog as $b)
    <dl>
                  <dt>titolo: {{ $b->title_blog }} - id: {{ $b->blogId }}</dt> 
                  <a>#tag 1 : {{ $b->tag_1 }}</a>
                  <a>|  #tag 2 : {{ $b->tag_2 }}</a>
                  <a>|  #tag 3 : {{ $b->tag_3 }}</a>
                  <a>|  creato il : {{ $b->created_at}}</a> 
                  | <a href="{{route('create.post.staff', $b->blogId)}}">aggiungi post</a>
                  <p>{!! $b->desc !!}</p>
                   
                   @can('isStaff')
                    {{ Form::open(array('route' => array('delete.blog.staff', [$b->blogId]), 'method' => 'delete')) }}
                   @endcan 
                   @can('isAdmin')
                    {{ Form::open(array('route' => array('delete.blog.admin', [$b->blogId]), 'method' => 'delete')) }}
                   @endcan 
                    
                    <p class="nomb"> 
                    {{ Form::submit('elimina blog ', ['class' => 'input-submit', 'id' => 'delete-blog']) }}
                    </p>
                    {{ Form::close() }}
                     </a>
                     @if($b->block == 1)
                       <p> <li>bloccato</li>
                              <a>
                            {{ Form::open(array('route' => array('unlock.blog.staff', [$b->blogId]), 'method' => 'put')) }}
                            {{ Form::open(array('route' => array('unlock.blog.admin', [$b->blogId]), 'method' => 'put')) }}
                            <p class="nomb"> 
                            {{ Form::submit('sblocca', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                            </p>
                            {{ Form::close() }}
                            </a>
                    @else     
                    <a> 
                             {{ Form::open(array('route' => array('block.blog.staff', [$b->blogId]), 'method' => 'put')) }}
                               <p class="nomb"> 
                            {{ Form::submit('blocca blog ', ['class' => 'input-submit', 'id' => 'delete-blog']) }}
                             </p>
                            {{ Form::close() }}
                            </a>
                            </p>
                      @endif
                     
                     
                     </dl>
    @endforeach
  @endisset()

        @isset($post)
            <h2>Posts</h2>
                @foreach ($post as $p)
                <dl>
                <dd> titolo: <strong>{{ $p->title }}</strong> | id: <strong>{{ $p->postId }}</strong>| autore: <strong>{{ $p->username_post_create }}</strong>
                <a>
                    {{ Form::open(array('route' => array('post.delete', [$p->postId]), 'method' => 'delete')) }}
                    <p class="nomb"> 
                    <a href = "{{route('show.post.staff', $p->postId)}}">visualizza</a> | 
                   
                            {{ Form::open(array('route' => array('post.delete', [$p->postId]), 'method' => 'delete')) }}
                            {{ Form::submit('elimina post ', ['class' => 'input-submit', 'id' => 'delete-post']) }}   
                           </p>
                            {{ Form::close() }}
                            </a><dd>
                            <p>{!! $p->headline !!}</p>
                </dl>
                <p align="center"> -- </p>  
                @endforeach
                @include('pagination.paginator', ['paginator' => $post])
        @endisset

@endsection



