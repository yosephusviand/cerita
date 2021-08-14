<!doctype html>
<html lang="en">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
    <meta name="description" content="Contact Person Pembuatan Web : 0823-2000-3832">
    <meta name="author" content="Yosephus Wahyu Eko Novianto, S.Kom">

    <link rel="icon" href="{{ asset('img/gk.ico') }}" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('h-menu/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('h-menu/vendor/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('h-menu/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('h-menu/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('h-menu/vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('h-menu/vendor/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('h-menu/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">

    <link rel="stylesheet" href="{{ asset('h-menu/') }}/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('h-menu/') }}/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('h-menu/') }}/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">

    <link rel="stylesheet" href="{{ asset('h-menu') }}/vendor/sweetalert/sweetalert.css" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('h-menu/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('h-menu/assets/css/color_skins.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        #topbar-notification {
            display: none;
            position: fixed;
            z-index: 99999;
            background: #05ab08;
            color: #fff;
            padding: 15px;
            left: 0;
            right: 0;
            top: 0;
            text-align: center;
        }

        #alert-notification {
            display: none;
            position: fixed;
            z-index: 99999;
            background: #e3342f;
            color: #fff;
            padding: 15px;
            left: 0;
            right: 0;
            top: 0;
            text-align: center;
        }

        .open-button {
            background-color: #2c61a5;
            color: white;
            padding: 8px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.9;
            position: fixed;
            z-index: 999;
            bottom: 0;
            right: 20px;
            width: 150px;
        }

        /* The popup chat - hidden by default */
        .chat-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            width: 300px;
            border: 5px solid #f1f1f1;
            z-index: 99999;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            height: 350px;
            overflow-y: scroll;
            padding: 10px;
            background-color: white;
        }

        /* Full-width textarea */
        .form-container textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #fff;
            border: 1px solid #ccc;
            resize: none;
            min-height: 100px;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }

    </style>

</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{ asset('h-menu/images/logo-icon.svg') }}" width="48" height="48"
                    alt="Lucid"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <div id="topbar-notification">

        <div class="container">
            <div id="text-notif">
                My awesome top bar
            </div>
        </div>

    </div>

    <div id="alert-notification">

        <div class="container">
            <div id="alert-notif">
                My awesome top bar
            </div>
        </div>

    </div>

    <div id="wrapper">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-brand">
                    <a href="index.html"><img src="{{ asset('assets') }}/images/logo.svg" alt="Lucid Logo"
                            class="img-responsive logo"></a>
                </div>

                <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">

                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="icon-menu"><i class="icon-login"></i></a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>

                <div class="navbar-btn">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false">
                        <i class="lnr lnr-menu fa fa-bars"></i>
                    </button>
                </div>
            </div>
        </nav>

        <div class="main_menu">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <div class="navbar-collapse align-items-center collapse" id="navbar">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown {{ request()->is('home*') ? 'active' : '' }}"><a
                                    href="{{ route('home') }}" class="nav-link"><i
                                        class="icon-home"></i>Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                            <li class="nav-item dropdown {{ request()->is('admin/diskusi*') ? 'active' : '' }}"><a
                                    href="{{ route('admin.diskusi') }}" class="nav-link"><i
                                        class="icon-users"></i>Diskusi</a>
                            </li>
                            <li class="nav-item dropdown {{ request()->is('admin/karya*') ? 'active' : '' }}">
                                <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i
                                        class="icon-lock"></i> <span>Karya</span></a>
                                <ul class="dropdown-menu animated bounceIn">
                                    <li><a href="{{ route('admin.cernak') }}">Cernak</a></li>
                                    <li><a href="{{ route('admin.komik') }}">Komik</a></li>
                                    <li><a href="{{ route('admin.pictbook') }}">Pitcbook</a></li>
                                    <li><a href="{{ route('admin.puisi') }}">Pusisi & Pantun</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown {{ request()->is('admin/informasi*') ? 'active' : '' }}"><a
                                    href="{{ route('admin.informasi') }}" class="nav-link"><i
                                        class="icon-film"></i>Informasi</a>
                            </li>
                            <li class="nav-item dropdown {{ request()->is('admin/piagam*') ? 'active' : '' }}">
                                <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i
                                        class="icon-badge"></i> <span>Karya</span></a>
                                <ul class="dropdown-menu animated bounceIn">
                                    <li><a href="{{ route('admin.piagam') }}">Kelola</a></li>
                                    <li><a href="{{ route('admin.piagamanak') }}">Piagam Anak</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown {{ request()->is('admin/akun*') ? 'active' : '' }}"><a
                                    href="{{ route('admin.akun') }}" class="nav-link"><i
                                        class="icon-user"></i>Akun</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        @yield('content')

    </div>


    <!-- Javascript -->
    <script src="{{ asset('h-menu/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('h-menu/assets/bundles/vendorscripts.bundle.js') }}"></script>

    <script src="{{ asset('h-menu/assets/bundles/chartist.bundle.js') }}"></script>
    <script src="{{ asset('h-menu/assets/bundles/knob.bundle.js') }}"></script>

    <script src="{{ asset('h-menu/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Jquery Knob-->
    <script src="{{ asset('h-menu/assets/bundles/flotscripts.bundle.js') }}"></script>
    <!-- flot charts Plugin Js -->
    <script src="{{ asset('h-menu/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ asset('h-menu/vendor/flot-charts/jquery.flot.selection.js') }}"></script>

    <script rel="stylesheet" src="{{ asset('h-menu') }}/vendor/sweetalert/sweetalert.min.js"></script>
    <script src="{{ asset('h-menu/assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('h-menu/assets/js/index.js') }}"></script>
    <script src="{{ asset('h-menu/vendor/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('h-menu/assets/js/pages/forms/dropify.js') }}"></script>


    <script src="{{ asset('h-menu') }}/assets/bundles/datatablescripts.bundle.js"></script>
    <script src="{{ asset('h-menu') }}/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="{{ asset('h-menu') }}/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('h-menu') }}/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="{{ asset('h-menu') }}/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="{{ asset('h-menu') }}/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="{{ asset('h-menu') }}/assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $('.hilangkan').click(function() {
            var id = $(this).data('id');
            var key = $(this).data('key');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('admin.sembunyi') }}",
                method: "POST",
                data: {
                    id: id,
                    key: key
                },
                success: function(data) {
                    showNotif('Berhasil Sembunyikan');
                    window.location.reload();
                }
            })

        });

        $('.munculkan').click(function() {
            var id = $(this).data('id');
            var key = $(this).data('key');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('admin.sembunyi') }}",
                method: "POST",
                data: {
                    id: id,
                    key: key
                },
                success: function(data) {
                    showNotif('Berhasil Sembunyikan');
                    window.location.reload();
                }
            })

        });

        $('.hapusdiskusi').click(function() {
            var id = $(this).data('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('admin.hapusdiskusi') }}",
                method: "POST",
                data: {
                    id: id,
                },
                success: function(data) {
                    showNotif('Berhasil Dihapus');
                    window.location.reload();
                }
            })

        });


    </script>
    <script>
        $(document).off('.datepicker.data-api');
        // $.fn.datepicker.defaults.format = "dd/mm/yyyy";
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });

        $(document).ready(function() {
            $('.select2').select2();
        });

        $('#tablecernak').load("{{ route('admin.tablecernak') }}");
        $('#tablekomik').load("{{ route('admin.tablekomik') }}");
        $('#tablepictbook').load("{{ route('admin.tablepictbook') }}");
        $('#tablepuisi').load("{{ route('admin.tablepuisi') }}");
    </script>
    <script>
        function showNotif(text) {

            $('#text-notif').html(text);
            $('#topbar-notification').fadeIn();

            setTimeout(function() {
                $('#topbar-notification').fadeOut();
                window.location.reload();
            }, 2000)
        }

        function showAlert(text) {

            $('#alert-notif').html(text);
            $('#alert-notification').fadeIn();

            setTimeout(function() {
                $('#alert-notification').fadeOut();
            }, 2000)
        }
    </script>


    <script>
        $(document).ready(function() {

            $('#myBtn').click(function() {
                var id = $(this).data('id');
                var user = $(this).data('user');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                if (user == 'admin') {
                    var form = $(
                        '<form action="{{ route('logout') }}" method="post">' +
                        '@csrf</form>'
                    );
                    $('body').append(form);
                    form.submit();
                } else {

                    $.ajax({

                        method: "POST",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            if (data == '') {
                                $('[name="id"]').val(id);
                                $('#mymodal').modal();
                            } else {
                                var form = $(
                                    '<form action="{{ route('logout') }}" method="post">' +
                                    '@csrf</form>'
                                );
                                $('body').append(form);
                                form.submit();
                            }
                        }
                    });
                }

            });

            $('.simpansurvei').click(function() {
                var id = $('#id').val();
                var survei = $('.jenis:checked').val();
                var catatan = $('#catatan').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({

                    method: "POST",
                    data: {
                        id: id,
                        survei: survei,
                        catatan: catatan,
                    },
                    success: function(data) {
                        var form = $(
                            '<form action="{{ route('logout') }}" method="post">' +
                            '@csrf</form>'
                        );
                        $('body').append(form);
                        form.submit();
                    }
                })
            })

            $(document).on('click', '.editakun', function() {
                var id = $(this).data('id');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('akun.edit') }}",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('[name="idedit"]').val(data.id);
                        $('[name="nama"]').val(data.name);
                        $('[name="email"]').val(data.email);
                    }
                });
            });

        });

        $(document).on('click', '.editkegiatan', function() {
            var id = $(this).data('id');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({

                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    $('[name="idedit"]').val(data.id);
                    $('[name="hari"]').val(data.hari);
                    $('[name="tanggal"]').val(data.tanggal);
                    $('[name="lokasi"]').val(data.lokasi);
                    $('[name="uraian"]').val(data.uraian);
                }
            });
        });
    </script>

    @if (!empty(Session::get('status')) && Session::get('status') == '1')
        <script>
            showNotif("{{ Session::get('message') }}");
        </script>
    @endif

    @if (!empty(Session::get('status')) && Session::get('status') == '2')
        <script>
            showAlert("{{ Session::get('message') }}");
        </script>
    @endif

</body>

</html>
