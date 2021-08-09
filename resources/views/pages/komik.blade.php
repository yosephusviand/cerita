@extends('layouts.lucid')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2>Komik</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Komik</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
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
                            <div class="row">
                                @foreach ($data as $val)
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <embed src="{{ route('komik.pdf', $val->id) }}" type="application/pdf"
                                                width="100%">
                                                <label for="">{{ $val->judul }}</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="{{ route('komik.pdfdownload', $val->id) }}" class="btn btn-primary btn-block">Download</a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="{{ route('komik.pdf', $val->id) }}" class="btn btn-primary btn-block" target="_blank">Baca</a>
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
