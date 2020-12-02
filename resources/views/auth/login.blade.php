@extends('layouts.app')
@section('title_dashboard','Login')
@section('content')

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf            
            <div class="form-group row">    
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email" required autofocus>
    
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">    
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="contraseña" required>
    
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>            
            <div class="form-group row mb-0">
                <button type="submit" class="login_btn btn btn-primary btn-lg btn-block">
                    {{ __('Ingresar') }}
                </button>
                @if (Route::has('password.request'))
                <!--    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>-->
                @endif
            </div>
        </form>
                
    </div>
    <div class="card-footer">
    </div>
    
@stop
