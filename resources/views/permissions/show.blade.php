@extends('layouts.app')
@section('title', __('models/permissions.singular'))
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">
                {{ __('models/permissions.singular') }}
            </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @include('permissions.show_fields')
                            <a href="{{ route('permissions.index') }}" class="btn btn-primary pull-right">
                                {{ __('crud.back') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

