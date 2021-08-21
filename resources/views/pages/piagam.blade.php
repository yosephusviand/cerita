@extends('layouts.lucid')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col">
                        <h2>Piagam</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Piagam</li>
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
                <div class="col-lg-4 col-md-12">
                    <div class="card" style="opacity: 80%">
                        <div class="header">
                            <form action="{{ route('piagam.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="idedit" value="">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Tuliskan "
                                        value="" autocomplete="off">
                                    @error('nama') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat"
                                        placeholder="Tuliskan " value="" autocomplete="off">
                                    @error('alamat') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">No Telp</label>
                                    <input type="number" name="nohp" class="form-control" id="nohp" placeholder="Tuliskan "
                                        value="" autocomplete="off">
                                    @error('nohp') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>

                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="card" style="opacity: 80%">
                        <div class="header">
                            <div class="table-responsive">
                                <table
                                    class="table table-hover js-basic-example dataTable table-custom table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $i => $val)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $val->nama }}</td>
                                                <td>{{ $val->jenisnya }}</td>
                                                <td>
                                                    <a href="{{ route('pdf', $val->id) }}" class="btn btn-primary"
                                                        target="_blank">Cetak</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
