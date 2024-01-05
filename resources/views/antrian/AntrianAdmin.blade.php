
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Admin/Staff | MedCall</title>

    @include('admin.templete.head')
    <script src="{{ asset('js/jam.js') }}"></script>
    <style>
        #watch {
            color: rgb(252, 150, 65);
            position: absolute;
            z-index: 1;
            height: 40px;
            width: 700px;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            font-size: 10vw;
            -webkit-text-stroke: 3px rgb(210, 65, 36);
            text-shadow: 4px 4px 10px rgba(210, 65, 36, 0.4),
                4px 4px 20px rgba(210, 45, 26, 0.4),
                4px 4px 30px rgba(210, 25, 16, 0.4),
                4px 4px 40px rgba(210, 15, 06, 0.4);
        }



        .product{
            overflow: hidden;
            background: #ffffff;
            text-align: center;
            width: 30vw;
            height: 400px;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 1.2rem;
            margin: 2rem;
            background: #D6E6FF;
        }


        .product2 {
            overflow: hidden;
            color: #21201e;
            text-align: center;
            width: 30vw;
            height: 400px;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 2px dashed #527BC0;
            border-radius: 32px;
            margin: 2rem;
        }


        /* .cardbody2 {
            border-radius: 32px;
            background: #ABCAF9;
            margin: 32px;
        } */
        .card-title {
            color: #527BC0;
            font-size: 32px;
            font-weight: 800;
        }

        h5 {
            color: #527BC0;
            font-weight: 600;
        }

        .card-body p{
            font-size: 64px;
            color: #ffffff;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);   
        }
        .card {
            background: transparent;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini" onload="realtimeClock()">
<div class="wrapper">
    @include('admin.templete.navbar')
    @include('admin.templete.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Antrian Hari Ini</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Antrian Hari Ini</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content" >
            <div class="row justify-content-center">
                <div class="card card-info card-outline">
                    <div class="card-body">
                        <form action="{{ route('antrian-masuk') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group center">
                                <center>
                                    <label id="clock" style="font-size: 100px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;
                                                text-shadow: 4px 4px 10px #36D6FE,
                                                4px 4px 20px #36D6FE,
                                                4px 4px 30px#36D6FE,
                                                4px 4px 40px #36D6FE;">
                                    </label>
                                </center>
                            </div>
                            <div class="product center" style="padding: 0 5px;">
                                <div class="card">
                                    <h2 class="card-title">Antrian Saat Ini</h2>
                                    <div class="card-body" style="margin-bottom: 48px; border-radius: 32px;
                                    background: #ABCAF9;
                                    margin: 32px;">
                                        <p class="card-text">
                                            @php
                                            $antrianAktif = \App\Models\Antrian::where('status', 'aktif')->first();
                                            $antrianId = $antrianAktif ? $antrianAktif->id : null;
                                            @endphp
                                            {{ $antrianId ? '' . $antrianId : 'Tidak ada Antrian aktif' }}
                                            
                
                                        </p>
                                    </div>
                                    {{-- <h5 class="card-text">Rabu, 25 Okt 2023</h5> --}}
                                    <h5 class="card-text">{{ \Carbon\Carbon::now()->format('l, d M Y') }}</h5>
                                    <h5 class="card-text">12.40 - 13.00WIB</h5>
                                </div>
                            </div>

                            <center>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Ambil No Antrian</button>

                                    <!-- Tombol Next -->
                                    <a href="{{ route('next-queue') }}" class="btn btn-success">Next</a>              
                                </div>
                            </center>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    @include('admin.templete.footer')

    </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
    <script src="{{ asset('AdminLte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLte/dist/js/adminlte.min.js') }}"></script>
    </body>
</html>
