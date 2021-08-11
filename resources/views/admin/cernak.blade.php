@extends('layouts.admin')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col">
                        <h2>Cernak</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Cernak</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <form action="{{ route('admin.karyastore') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="idedit" value="">
                                <div class="form-group">
                                    <label for="nama">Nama Pengirim</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Tuliskan "
                                        value="" autocomplete="off">
                                    @error('nama') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Tuliskan "
                                        value="" autocomplete="off">
                                    @error('judul') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Jenis Karya</label>
                                    <select name="kategori" class="form-control" id="kategori">
                                        <option value="1" selected>Cernak</option>
                                    </select>
                                    @error('kategori') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <label for="">Upload File PDF</label>
                                <div class="form-group shadow">
                                    <input type="file" name="file" class="dropify" data-allowed-file-extensions="pdf"
                                        accept="application/pdf, application/PDF">
                                </div>
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">

                    <div id="tablecernak"></div>

                </div>
            </div>
        </div>
    </div>

@endsection
