@extends('layouts.app')
@section('title', __('models/articles.plural'))
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">
                {{ __('models/articles.plural') }}
            </h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('menu.dashboard') }}</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('articles.index') }}">{{ __('models/articles.plural') }}</a></div>
                <div class="breadcrumb-item">{{ __('crud.list') }}</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    @include('flash::message')
                    <div class="card">
                        <div class="card-body">
                            @include('articles.table')
                        </div>
                    </div>
                    <div class="text-center">
                        @include('vendor.adminlte-templates.common.paginate', ['records' => $articles])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
