@extends('layouts.app')
@section('title',__('crud.edit') . ' ' . __('models/articles.singular'))
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">
                {{ __('crud.edit') }} {{ __('models/articles.singular') }}
            </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    @include('vendor.adminlte-templates.common.errors')
                    <div class="card">
                        <div class="card-body">
                            {!! Form::model($article, ['route' => ['articles.update', $article->id], 'method' => 'patch']) !!}
                            @include('articles.fields')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
