@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ __('models/users.singular') }}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('users.show_fields')
                    <a href="{{ route('users.index') }}" class="btn btn-default">
                        {{ __('crud.back') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
