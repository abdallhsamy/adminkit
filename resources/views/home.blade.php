@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">{{ __('home.title') }}</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">{{ __('home.header') }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

