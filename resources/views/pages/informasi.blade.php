@extends('layouts.lucid')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2>Informasi</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Informasi</li>
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
                @foreach ($data as $val)
                    <div class="col-lg-4 col-md-12">
                        <div class="card project_widget">
                            <div class="pw_img">
                                <img class="img-fluid" width="100%" src="{{ route('image.informasi', $val->id) }}" alt="About the image">
                            </div>
                            <div class="pw_content">
                                <div class="pw_header">
                                    <h6>{{ $val->nama }}</h6>
                                </div>
                                <div class="pw_meta">
                                    <p> Pelaksanaan tanggal {{ date('d-m-Y', strtotime($val->tanggal)) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
