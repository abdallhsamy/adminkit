@extends('layouts.app')
@section('title', __('models/articles.singular'))
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">
                {{ __('models/articles.singular') }}
            </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @include('articles.show_fields')
                            <a href="{{ route('articles.index') }}" class="btn btn-primary pull-right">
                                {{ __('crud.back') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
