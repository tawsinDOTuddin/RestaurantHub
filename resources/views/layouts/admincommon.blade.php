<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="{{asset('/css/adminpanel/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/adminpanel/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/adminpanel/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('/css/adminpanel/css/styles.css')}}" rel="stylesheet">
    <script src="{{ asset('css/adminpanel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>RESTHUB</span> Admin</a>
            </div>
        </div>
    </nav>

    <main class="py-4">
            @yield('content')
        </main>
    </div>
<script src="{{ asset('css/adminpanel/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('css/adminpanel/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('css/adminpanel/js/custom.js') }}"></script>
</body>
</html>