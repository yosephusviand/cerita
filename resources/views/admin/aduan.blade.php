@extends('layouts.admin')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col">
                        <h2>Aduan</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Aduan</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="card">
                    <div class="header">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No Telp</th>
                                        <th>Keluhan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $i => $val)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $val->nama }}</td>
                                            <td>{{ $val->nohp }}</td>
                                            <td>{{ $val->keluhan }}</td>
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
@stop
