@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ __('models/articles.singular') }}
        </h1>
   </section>
   <div class="content">
       @include('vendor.adminlte-templates.common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="">
                   {!! Form::model($article, ['route' => ['articles.update', $article->id], 'method' => 'patch']) !!}

                        @include('articles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
