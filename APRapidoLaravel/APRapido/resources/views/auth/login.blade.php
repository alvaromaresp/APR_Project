@extends('layout.app')

@section('caminho')
    <b>> Início</b>
@endsection

@section('content')
@desktop 
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row mt-5">
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" placeholder="Senha" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <center>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <a href="{{ route('register') }}" class="btn btn-primary mt-3">
                                    {{ __('Resgistre-se') }}
                                </a>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection

@elsedesktop
@section('content')
<div class="container">
    <div class="row justify-content-center ml-2">
        <div class="col-md-8">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row mt-5">
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" placeholder="Senha" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <center>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <a href="{{ route('register') }}" class="btn btn-primary mt-3 mb-5">
                                    {{ __('Resgistre-se') }}
                                </a>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    Bem-vindo ao software APRapido. Ele foi feito pela empresa <b>SOTI</b> para otimizar a criação do documento APR. Para acessar suas configurações, basta entrar preenchendo as informações ao lado. Para registrar-se, basta clicar em "Registre-se".
@endsection
