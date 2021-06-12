@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">{{ __('auth.verify.title') }}</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('auth.verify.verification_message') }}
                            </div>
                        @endif
                        <p>{{ __('auth.verify.before_message') }}</p>
                        <a href="{{ route('verification.resend') }}">{{ __('auth.verify.request_another') }}'</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
