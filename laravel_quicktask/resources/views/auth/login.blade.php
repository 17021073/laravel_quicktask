@extends('layouts.app')

@section('content')
<div class='contained'>
    <h2>{{ __('login') }}</h2>

    <form action="{{ route('login', app()->getLocale()) }}" method='POST'>
        @csrf
        <input id="email" type="email" class="form-info form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus> 
        
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
        <input id="password" type="password" class="form-info form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('password') }}">
        
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
                
        <p class="remember_me">
            <input type="checkbox" name="remember" id="remember" <?php (old('remember')) ? 'checked' : '' ?>>
            <label for="remember">{{ __('remember') }}</label>
        </p>

        <input type="submit" value="{{ __('login') }}" class="button primary" name="login">
    </form>
    <a class='create-acc-link' href="{{ route('register', app()->getLocale()) }}">{{ __('create_account') }}</a>
    
</div>
@endsection
