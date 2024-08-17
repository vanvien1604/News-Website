<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Tin Tức</title>
</head>
<body>
    @include('layouts.header')

        <main id="main">

            @yield('content')
            
        </main><!-- End #main -->

    @include('layouts.footer')
</body>
</html>