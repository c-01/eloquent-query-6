@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="form-check-inline">
                                <label for="manager" class="form-check-label">
                                    <input type="radio" id="manager" name="level" value="manager" @if(old('level', 1) ==  1) checked="checked" @endif />Manager
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label for="employee" class="form-check-label">
                                    <input type="radio" id="employee" name="level" value="0" @if(old('level', 1) ==  0) checked="checked" @endif />Employee
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="form-check-inline">
                                <label for="female" class="form-check-label">
                                    <input type="radio" id="female" name="sex" value="1" @if(old('sex', 0) ==  1) checked="checked" @endif />Female
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label for="male" class="form-check-label">
                                    <input type="radio" id="male" name="sex" value="0" @if(old('sex', 0) ==  0) checked="checked" @endif />Male
                                </label>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
@endsection

{{--<div class="form-group row">
    <div class="form-check-inline">
        <label for="manager" class="form-check-label">
            <input type="radio" id="manager" name="level" value="1" @if(old('level', 1) ==  1) checked="checked" @endif />Manager
        </label>
    </div>
    <div class="form-check-inline">
        <label for="employee" class="form-check-label">
            <input type="radio" id="employee" name="level" value="0" @if(old('level', 1) ==  0) checked="checked" @endif />Employee
        </label>
    </div>
</div>

<div class="form-group row">
    <div class="form-check-inline">
        <label for="female" class="form-check-label">
            <input type="radio" id="female" name="sex" value="1" @if(old('sex', 0) ==  1) checked="checked" @endif />Female
        </label>
    </div>
    <div class="form-check-inline">
        <label for="male" class="form-check-label">
            <input type="radio" id="male" name="sex" value="0" @if(old('sex', 0) ==  0) checked="checked" @endif />Male
        </label>
    </div>
</div>--}}
