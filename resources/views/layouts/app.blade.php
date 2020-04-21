<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Simple CMS" />
    <meta name="author" content="Sheikh Heera" />
    <link rel="shortcut icon" href={{ asset("favicon.png") }} />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>LaraPress</title>
    <link href = {{ asset("css/app.css") }} rel="stylesheet" />
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    <script src={{ asset('js/app.js') }}></script>
    <link href = {{ asset("../ressources/js/components/app.js") }} rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js"></script>
   

    
</head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>

        @yield('content')
    </body>
</html>