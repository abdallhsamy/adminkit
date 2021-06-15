@extends('layouts.app')
@section('title', __('models/roles.singular'))
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">
                {{ __('models/roles.singular') }}
            </h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('menu.dashboard') }}</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('roles.index') }}">{{ __('models/roles.plural') }}</a></div>
                <div class="breadcrumb-item">{{ __('crud.show') }}</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @include('roles.show_fields')
                            <a href="{{ route('roles.index') }}" class="btn btn-primary pull-right">
                                {{ __('crud.back') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

