<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RSUD Lembang | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('assets/extras/font-sans-pro.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('assets/extras/ionicons_2.0.1.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        @include('layouts.header')
        <!-- Main Sidebar/Menu -->
        @include('layouts.sidebar')
        <!-- Page Content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        <!-- Main Footer -->
        @include('layouts.footer')
    </div>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE -->
    <script src="{{ asset('assets/js/adminlte.js') }}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('assets/js/pages/dashboard3.js') }}"></script>
    <script>
		const zeroFill = n => {
			return ('0' + n).slice(-2);
		}

		const interval = setInterval(() => {
			const now = new Date();

            let day = now.getDay();
            switch (day) {
                case 0:
                    day = 'Minggu'
                    break;
                case 1:
                    day ='Senin'
                    break;
                case 2:
                    day ='Selasa'
                    break;
                case 3:
                    day = 'Rabu'
                    break;
                case 4:
                    day = 'Kamis'
                    break;
                case 5:
                    day = 'Jumat'
                    break;    
                default:
                    day = 'Sabtu'
                    break;
            }

            let month = now.getMonth();
            switch (month) {
                case 0:
                    month = 'Januari'
                    break;
                case 1:
                    month = 'Februari'
                    break;
                case 2:
                    month = 'Maret'
                    break;
                case 3:
                    month = 'April'
                    break;
                case 4:
                    month = 'Mei'
                    break;
                case 5:
                    month = 'Juni'
                    break;
                case 6:
                    month = 'Juli'
                    break;
                case 7:
                    month = 'Agustus'
                    break;
                case 8:
                    month = 'September'
                    break;
                case 9:
                    month = 'Oktober'
                    break;
                case 10:
                    month = 'November'
                    break;
                default:
                    month = 'Desember'
                    break;
            }

			const dateTime = day + ', ' + zeroFill((now.getUTCDate())) + '-' + month + '-' + now.getFullYear() + ' ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());

			document.getElementById('live_datetime').innerHTML = dateTime;
		}, 1000);
    </script>
    @stack('script')
</body>

</html>
