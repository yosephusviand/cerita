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

        .bc {

            position: relative;
            overflow-x: hidden;
            background-image: url("/img/bcfix.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            background-size: cover;
        }

    </style>

</head>

<body class="theme-cyan bc">
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
                    <a href="#""><img src=" {{ asset('h-menu/images/logo.svg') }}" alt="Lucid Logo"
                        class="img-responsive logo"></a>
                </div>
                <div class="navbar-btn">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false">
                        <i class="lnr lnr-menu fa fa-bars"></i>
                    </button>
                </div>
            </div>
        </nav>


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
        $(document).off('.datepicker.data-api');
        // $.fn.datepicker.defaults.format = "dd/mm/yyyy";
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });

        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <script>
        function showNotif(text) {

            $('#text-notif').html(text);
            $('#topbar-notification').fadeIn();

            setTimeout(function() {
                $('#topbar-notification').fadeOut();
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

            $(document).ready(function() {
                $("#button").click(function() {
                    $("#madul").modal();
                });
            });

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

                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('[name="idedit"]').val(data.id);
                        $('[name="namaormas"]').val(data.name);
                        $('[name="email"]').val(data.email);
                        $('[name="notelp"]').val(data.nohp);
                        $('[name="kategori"]').val(data.member);
                    }
                });
            });

            $(document).on('click', '.editprofile', function() {
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
                        $('[name="namaormas"]').val(data.namaormas);
                        $('[name="namaketua"]').val(data.namaketua);
                        $('[name="notelp"]').val(data.notelp);
                        $('[name="bentuk"]').val(data.bentuk);
                        $('[name="sifatkhusus"]').val(data.sifat);
                        $('[name="alamat"]').val(data.alamat);
                        $('[name="desa"]').val(data.desa);
                        $('[name="kecamatan"]').val(data.kecamatan);
                        $('[name="kabupaten"]').val(data.kabupaten);
                        $('[name="provinsi"]').val(data.provinsi);
                        $('[name="nomorregistrasi"]').val(data.nomorregistrasi);
                        $('[name="latitude"]').val(data.latitude);
                        $('[name="longitude"]').val(data.longitude);
                    }
                });
            })
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
