<html lang="en">
<head>
    <title>Laravel Datatable using Yajra Tutorial Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link  href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">   
</head>
<body>
 

@yield('content')

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

@yield('scripts')

</body>
</html>