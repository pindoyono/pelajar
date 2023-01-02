<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users | Kodingin</title>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('table/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('table/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('table/datatables.min.css') }}" />
    <script src="{{ asset('table/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('table/jquery.dataTables.min.js') }}"></script>
</head>
 
<body class="container">
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> -->
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
            </form>
                <a href="{{ route('print') }}" class="btn btn-primary">Print</a>
            <h1 class="mt-4 mb-4"> User DataTable Server Side</h2>
            <table id="data_users_side" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Kompetensi Keahlian</th>
                        <!-- <th>Opsi</th> -->
                    </tr>
                </thead>
            </table>
            <script>
                $(function() {
                    $('#data_users_side').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "/users_server_side",
                        columns: [
                            {
                                data: 'ID',
                                name: 'ID'
                            },
                            {
                                data: 'AVATAR',
                                name: 'AVATAR'
                            },
                            {
                                data: 'name',
                                name: 'name'
                            },
                            {
                                data: 'nisn',
                                name: 'nisn'
                            },
                            {
                                data: 'komptensi_keahlian',
                                name: 'komptensi_keahlian'
                            },
                            
                            // {
                            //     data: 'ID',
                            //     name: 'ID'
                            // }
                        ]
                    });
                });
            </script>
        </main>
    </div>
</body>
</html>