@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ __('models/users.singular') }}
        </h1>
   </section>
   <div class="content">
       @include('vendor.adminlte-templates.common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="">
                   {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

                        @include('users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection