@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">
            {{ __('models/users.plural') }}
        </h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('users.create') }}">{{ __('crud.add_new') }}</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('users.table')
            </div>
        </div>
        <div class="text-center">
        @include('vendor.adminlte-templates.common.paginate', ['records' => $users])

        </div>
    </div>
@endsection

