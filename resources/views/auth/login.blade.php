@extends('principal')

@section('containerF')
  <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Login o Registro</h3>
      </div>
    </div>

  </section>

  <section class="section section-variant-1 bg-gray-100">
    <div class="container">
      <div class="row row-50 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-6">
          <div class="card-login-register" id="card-l-r">
            <div class="card-top-panel">
              <div class="card-top-panel-left">
                <h5 class="card-title card-title-login">Login</h5>
                <h5 class="card-title card-title-register">Registrate</h5>
              </div>
              <div class="card-top-panel-right"><span class="card-subtitle"><span class="card-subtitle-login">Registrate</span><span class="card-subtitle-register">Login</span></span>
                <button class="card-toggle" data-custom-toggle="#card-l-r"><span class="card-toggle-circle"></span></button>
              </div>
            </div>
            <div class="card-form card-form-login">
              <form class="rd-form rd-mailform" action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-wrap">
                  <label class="form-label" for="form-login-name-1">Login</label>
                  <input class="form-input{{ $errors->has('email') ? ' is-invalid' : '' }}" id="form-login-name-1" type="text" name="email" value="{{ old('email') }}" data-constraints="@Required">
                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="form-login-password-1">Password</label>
                  <input class="form-input{{ $errors->has('password') ? ' is-invalid' : '' }}" id="form-login-password-1" type="password" name="password" data-constraints="@Required">
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <label class="checkbox-inline checkbox-inline-lg checkbox-light">
                  <input name="remember" value="checkbox-1" type="checkbox" {{ old('remember') ? 'checked' : '' }}>Recordarme
                </label>
                <button class="button button-lg button-primary button-block" type="submit">Ingresar</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Olvidaste tu Contraseña?
                    </a>
                @endif
              </form>
            </div>
            <div class="card-form card-form-register">
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{route('register')}}">
                @csrf
                <div class="form-wrap">
                  <label class="form-label" for="form-register-nombre">Nombre</label>
                  <input class="form-input{{ $errors->has('name') ? ' is-invalid' : '' }}" id="form-register-nombre" type="text" name="name" data-constraints="@Required" value="{{ old('name') }}">
                  @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="form-register-email">E-mail</label>
                  <input class="form-input{{ $errors->has('email') ? ' is-invalid' : '' }}" id="form-register-email" type="email" name="email" data-constraints="@Email @Required" value="{{ old('email') }}">
                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="form-login-password-2">Password</label>
                  <input class="form-input{{ $errors->has('password') ? ' is-invalid' : '' }}" id="form-login-password-2" type="password" name="password" data-constraints="@Required">
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="form-login-password-3">Confirmar Password</label>
                  <input class="form-input" id="form-login-password-3" type="password" name="password_confirmation" data-constraints="@Required">
                </div>
                <button class="button button-lg button-primary button-block" type="submit">Create new account</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
