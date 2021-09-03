@extends('layouts.lucid')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-6">
                        <h2>Cerita Anak</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Cerita Anak</li>
                        </ul>
                    </div>
                    <div class="col-6 text-right">
                        <div class="form-group">
                            <a href="{{ url('/') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card" style="opacity: 80%">
                        <div class="body">
                            <div class="alert alert-danger" role="alert">
                                1. Seluruh naskah di dalam Pojok Migunani dilindungi undang-undang dan dipergunakan hanya
                                untuk kepentingan Sosialisasi Wawasan Kebangsaan Bagi Anak. <br>
                                2. Dilarang keras memperbanyak/menjiplak/membajak/menyalahgunakan naskah dalam Pojok
                                Migunani untuk kepentingan pribadi
                            </div>
                            <div class="row">
                                @foreach ($data as $val)
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <embed src="{{ route('cernak.pdf', $val->id) }}" type="application/pdf"
                                                width="100%">
                                            <label for="">{{ $val->judul }}</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="{{ route('cernak.pdfdownload', $val->id) }}"
                                                        class="btn btn-primary btn-block">Unduh</a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="{{ route('cernak.pdf', $val->id) }}"
                                                        class="btn btn-primary btn-block" target="_blank">Baca</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
