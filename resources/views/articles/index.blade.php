@extends('layouts.app')
@section('title', __('models/articles.plural'))
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">
                {{ __('models/articles.plural') }}
            </h3>
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
