<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{--style--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    {{--CSS--}}
    <script defer src="{{asset('js/app.js')}}"></script>
    
</head>
<body>
    
    <main>
        @yield('main-content')
    </main>
        
</body>
</html>