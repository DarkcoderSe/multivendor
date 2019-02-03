@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col s12 m8 l8 offset-s2 offset-l2">
            <div class="card">

                <div class="card-content">
                  <div class="card-title">{{ __('Register') }}</div>
                    <form method="POST" action="{{ route('register') }}">
                      <div class="row">
                        @csrf
                        <div class="col s12 m12 l12 input-field">
                              <label for="name" >{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>


                        <div class="col s12 m12 l12 input-field">
                              <label for="email" >{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                          <div class="col s12 m12 l12 input-field">
                              <label for="password" >{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>


                          <div class="col s12 m12 l12 input-field">
                              <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>

                            <div class="col s12 m12 l12 input-field">
                              <button type="submit" class="btn green right">
                                  {{ __('Register') }}
                              </button>
                            </div>
                      </div>

                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
