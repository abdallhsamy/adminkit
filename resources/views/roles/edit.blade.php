@extends('layouts.app')
@section('title',__('crud.edit') . ' ' . __('models/roles.singular'))
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">
                {{ __('crud.edit') }} {{ __('models/roles.singular') }}
            </h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('menu.dashboard') }}</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('roles.index') }}">{{ __('models/roles.plural') }}</a></div>
                <div class="breadcrumb-item">{{ __('crud.edit') }}</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    @include('vendor.adminlte-templates.common.errors')
                    <div class="card">
                        <div class="card-body">
                            {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}
                            @include('roles.fields')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
