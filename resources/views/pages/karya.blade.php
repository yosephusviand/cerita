@extends('layouts.lucid')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2>Upload Karya</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Upload Karya</li>
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
                    <div class="card" style="opacity: 90%">
                        <div class="body">
                            <form action="{{ route('karya.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Pengirim</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Tuliskan " value="" autocomplete="off">
                                    @error("nama") <div class="small text-danger">{{ message }}</div> @enderror
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
                                        <option value="" disabled selected hidden>Pilih </option>
                                        <option value="1">Cernak</option>
                                        <option value="2">Komik</option>
                                        <option value="3">Pitcbook</option>
                                        <option value="4">Puisi & Pantun</option>
                                    </select>
                                    @error('kategori') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <label for="">Upload File PDF</label>
                                <div class="form-group shadow">
                                    <input type="file" name="file" class="dropify"
                                        data-allowed-file-extensions="pdf" accept="application/pdf, application/PDF">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
