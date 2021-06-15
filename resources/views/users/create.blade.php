@extends('layouts.app')
@section('title',__('crud.add_new') . ' ' . __('models/users.singular'))
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">
                {{ __('crud.add_new') }} {{ __('models/users.singular') }}
            </h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('menu.dashboard') }}</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('users.index') }}">{{ __('models/users.plural') }}</a></div>
                <div class="breadcrumb-item">{{ __('crud.add_new') }}</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    @include('vendor.adminlte-templates.common.errors')
                    <div class="card">
                        <div class="card-body">
                            {!! Form::open(['route' => 'users.store']) !!}
                            @include('users.fields')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
