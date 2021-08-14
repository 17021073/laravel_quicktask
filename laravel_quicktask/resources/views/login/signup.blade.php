@include('layout.main')

@section('main-content')
<div class='contained'>
    <h2>Signup</h2>
    <form action="" method="POST">
        <input type="text" class="form-info" name="username" value="" placeholder="Username" >
        
        <input type="email" class="form-info" name="email" placeholder="Email">

        <input type="password" class="form-info" name="password" value="" placeholder="Password">

        <input type="password" class="form-info" name="confirmPassword" value="" placeholder="Confirm Password">
        
        <input type="submit" value="Submit" class="button primary" name="signup">
    </form>
    <a class='create-acc-link' href="">Login</a>
</div>
@endsection