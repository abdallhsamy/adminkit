@extends('layouts.app')
@section('title', __('models/roles.plural'))
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">
                {{ __('models/roles.plural') }}
            </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    @include('flash::message')
                    <div class="card">
                        <div class="card-body">
                            @include('roles.table')
                        </div>
                    </div>
                    <div class="text-center">
                        @include('vendor.adminlte-templates.common.paginate', ['records' => $roles])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
