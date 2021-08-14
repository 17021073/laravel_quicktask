<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ mix('assets/css/app.css') }}" type="text/css">
</head>
<body>
    <!-- container -->
    <div class='container'>
        <!-- main content -->
        @yield('main-content')
    </div>
    <!-- end container -->
</body>
</html>
