<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <style>
        
        @media(min-width:500px){ .navbar{
            background-color: transparent !important;
        }}

        .custom-checkbox .custom-control-input:checked~ .custom-control-label::before{
            background-color: green;
        }
        .custom-checkbox2 .custom-control-input2:checked~ .custom-control-label2::before{
            background-color: red;
        }
        .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: green;
        }
        .custom-checkbox2 .custom-control-input2:disabled:checked~.custom-control-label2::before {
            background-color: red;
        }
        a:hover{
            color: white;
        }
        @yield('style')
    </style>
</head>
<body>
    <div class="pt-3" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/pics/uni5.jpg');height: 100vh;background-size: cover; backgra">
        @include('navbar')
        <div class="my-5"></div>
        @yield('body')
    </div>
    <script src="/js/popper.min.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
            @yield('scripts')
    </script>
</body>
</html>