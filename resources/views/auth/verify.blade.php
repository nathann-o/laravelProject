@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Uma mensagem de verificação foi enviada ao seu e-mail') }}
                        </div>
                    @endif

                    {{ __('Por favor, verifique seu endereço de e-mail') }}
                    {{ __('Se não recebeu o e-mail') }}, <a href="{{ route('verification.resend') }}">{{ __(' para enviar novamente') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
