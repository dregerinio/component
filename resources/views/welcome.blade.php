<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COMPONENT 1</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ route('home') }}" class="brand-link text-center">
                <span class="brand-text font-weight-light">Control Panel</span>
            </a>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Component simulation</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4 offset-4">
                            <div class="card card-primary card-outline">
                                <div class="card-body text-center">
                                    <h5 class="card-title float-none mb-3">COMPONENT 1</h5>
                                    <p class="card-text">
                                        {{ config('app.description') }}
                                    </p>
                                    <button id="pusk-button" onclick="activate()" class="btn btn-success">ПУСК</button>
                                    <button id="stop-button" onclick="deactivate()" class="btn btn-danger">СТОП</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
    <script>
        $(document).ready(function() {
            get_status();
        });

        function get_status() {
            $.ajax({
                url: "{{ route("get_status") }}",
                cache: false,
                type: 'GET',
                success: function(result) {
                    result= JSON.parse(result);
                    if(result.active){
                        $("#pusk-button").removeClass("btn-success").addClass('btn-default').prop("disabled", true);
                        $("#stop-button").removeClass("btn-default").addClass('btn-danger').prop("disabled", false);
                    } else {
                        $("#pusk-button").removeClass("btn-default").addClass('btn-success').prop("disabled", false);
                        $("#stop-button").removeClass("btn-danger").addClass('btn-default').prop("disabled", true);
                    }
                }
            });
            setTimeout(get_status,1000);
        }

        function activate(){
            $.ajax({
                url: "{{ route("activate") }}",
                cache: false,
                type: 'GET',
                success: function(result) {
                    
                }
            });
        }

        function deactivate(){
            $.ajax({
                url: "{{ route("deactivate") }}",
                cache: false,
                type: 'GET',
                success: function(result) {
                    
                }
            });
        }
    </script>
</body>

</html>
