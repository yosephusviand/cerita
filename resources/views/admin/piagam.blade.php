@extends('layouts.admin')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col">
                        <h2>Kelola Piagam</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Kelola Piagam</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <form action="{{ route('admin.piagamstore') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="idedit" value="">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Tuliskan "
                                        value="" autocomplete="off">
                                    @error('nama') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <label for="">Upload File</label>
                                <div class="form-group shadow">
                                    <input type="file" name="file" class="dropify"
                                        data-allowed-file-extensions="png jpg jpeg" accept="image/*">
                                </div>
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>File</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $i => $val)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $val->nama }}</td>
                                            <td> <img src="{{ route('image.displayImage', $val->id) }}" alt="" title=""
                                                    width="100px">
                                            </td>
                                            <td>{{ $val->status_now }}</td>
                                            <td>
                                                @if ($val->status == 1)
                                                    <a href="{{ route('admin.piagamaktif', $val->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                @else
                                                    <a href="{{ route('admin.piagamnonaktif', $val->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                                @endif
                                                <a href="{{ route('admin.karyadestroy', $val->id) }}"
                                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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

@endsection
