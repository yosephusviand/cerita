@extends('layouts.admin')
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
                </div>
            </div>

            <div class="row clearfix">
                <div class="card">
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
                                                <a href="{{ route('pdf', $val->id) }}" class="btn btn-primary" target="_blank"><i class="fa fa-file-pdf-o"></i></a>
                                                <a href="{{ route('admin.piagamanakdelete', $val->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
