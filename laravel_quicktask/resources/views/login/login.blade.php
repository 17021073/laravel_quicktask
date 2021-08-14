@extends('layout.main')

@section('main-content')
    <!-- login content -->
    <div class='contained'>
        <h2>Login</h2>
        <p class='error'>Please enter correct username and password</p>
        <form action="" method='POST'>
            <input id="username" type="text" class="form-info" name="username" 
                value="" placeholder="Username" >
            <input id="password" type="password" class="form-info" name="password" 
                value="" placeholder="Password">
            <p class="remember_me">
                <input type="checkbox" name='remember' id="remember">
                <label for="remember">Remember me</label>
            </p>
            <input type="submit" value="Login" class="button primary" name="login">
        </form>
        <a class='create-acc-link' href="">Create account</a>
    </div>
@endsection
