@extends('layouts.app')

@section('content')
<div class='contained'>
    <h2>{{ __('signup') }}</h2>
    <form action="" method='POST' action="{{ route('register', app()->getLocale()) }}">
        @csrf
        <input id="name" type="text" class="form-info form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('username') }}" required autocomplete="name" autofocus>
        
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input id="email" type="email" class="form-info form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input id="password" type="password" class="form-info form-control @error('password') is-invalid @enderror" name="password" value="" placeholder="{{ __('password') }}" required autocomplete="new-password"> 
        
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
        <input id="password-confirm" type="password" class="form-info form-control" name="password_confirmation" value="" placeholder="{{ __('Confirm_Password') }}" required autocomplete="new-password">
        
        <input type="submit" value="{{ __('signup') }}" class="button primary" name="signup">
    </form>
</div>
@endsection
