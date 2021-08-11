@extends('layouts.admin')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col">
                        <h2>Kelola Akun</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Kelola Akun</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <form action="{{ route('akun.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="idedit" value="">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama"
                                        placeholder="Tuliskan " value="" autocomplete="off">
                                    @error('nama') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Tuliskan "
                                        value="" autocomplete="off">
                                    @error('email') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Tuliskan " value="" autocomplete="off">
                                    @error('password') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>

                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Data Akun </h2>
                            <div class="table-responsive">
                                <table
                                    class="table table-hover js-basic-example dataTable table-custom table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $i => $val)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $val->name }}</td>
                                                <td>{{ $val->email }}</td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm editakun"
                                                        data-id="{{ $val->id }}">Edit</button>
                                                    <a href="{{ route('akun.destroy', $val->id) }}"
                                                        class="btn btn-danger btn-sm">Hapus</a>
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
