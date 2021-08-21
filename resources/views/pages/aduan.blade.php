@extends('layouts.lucid')

@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-6">
                        <h2>Layanan Aduan</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Layanan Aduan</li>
                        </ul>
                    </div>
                    <div class="col-6 text-right">
                        <div class="form-group">
                            <a href="{{ url('/') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>

                </div>
            </div>

            {{-- <div class="row clearfix "> --}}

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="opacity: 80%">
                        <div class="card-header">{{ __('Layanan Aduan') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('aduan.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Tuliskan "
                                        value="" autocomplete="off" required>
                                    @error('nama') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">No Telp</label>
                                    <input type="number" name="nohp" class="form-control" id="nohp" placeholder="Tuliskan "
                                        value="" autocomplete="off" required>
                                    @error('nohp') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Keluhan</label>
                                    <textarea name="keluhan" class="form-control" id="keluhan" rows="3" required></textarea>
                                    @error('keluhan') <div class="small text-danger">{{ message }}</div> @enderror
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
@stop
