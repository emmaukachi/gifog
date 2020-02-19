<!DOCTYPE html>
<html lang="en">

<head>
    {{--<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
    <!--<title></title>-->
    @include('layout.header')
    

    @include('layout.nav')
</head>
<body>
        @section('main-content')
        
        @show

        @include('layout.footer')
</body>
</html>