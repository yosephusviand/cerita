@extends('layouts.lucid')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 ">
                        <h2>Informasi</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Informasi</li>
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
                @foreach ($data as $val)
                    <div class="col-lg-3 col-md-12">
                        <div class="card project_widget">
                            <a href="#largeModal{{ $val->id }}" data-toggle="modal" data-target="#largeModal{{ $val->id }}">
                                <div class="pw_img">
                                    <img class="img-fluid img-thumbnail" width="100%" style="height: 200px; object-fit: contain" class="imagepreview"
                                        id="gambar{{ $val->id }}" data-kode="{{ $val->id }}"
                                        src="{{ route('image.informasi', $val->id) }}" alt="About the image">
                                </div>
                            </a>
                            <div class="pw_content small">
                                <div class="pw_header small">
                                    <h6 class="text-justify">{{ $val->nama }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="largeModal{{ $val->id }}" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="title" id="largeModalLabel">{{ $val->nama }}</h6>
                                </div>
                                <div class="modal-body">
                                    <img class="img-fluid" width="100%" class="imagepreview"
                                        id="gambar{{ $val->id }}" data-kode="{{ $val->id }}"
                                        src="{{ route('image.informasi', $val->id) }}" alt="About the image">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@stop
