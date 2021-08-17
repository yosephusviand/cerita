@extends('layouts.admin')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col">
                        <h2>Informasi</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Informasi</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <form action="{{ route('admin.informasistore') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="idedit" id="idedit" value="">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Tuliskan "
                                        value="" autocomplete="off">
                                    @error('nama') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pelaksanaan</label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal"
                                        placeholder="Tuliskan " value="" autocomplete="off">
                                    @error('tanggal') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>

                                <label for="">Upload File</label>
                                <div class="form-group shadow">
                                    <input type="file" name="file" class="dropify"
                                        data-allowed-file-extensions="jpg jpeg png" accept="image/*">
                                </div>
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">

                            <div class="table-responsive">
                                <table
                                    class="table table-hover js-basic-example dataTable table-custom table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Gambar</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $i => $val)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $val->nama }}</td>
                                                <td>{{ $val->tanggal }}</td>
                                                <td>
                                                    <img src="{{ route('image.liatinfo', $val->id) }}" alt="" title=""
                                                        width="100px">
                                                </td>
                                                <td>{{ $val->status_name }}</td>
                                                <td>
                                                    @if ($val->status == 1)
                                                        <a href="{{ route('admin.informasiaktif', $val->id) }}"
                                                            class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                                    @else
                                                        <a href="{{ route('admin.informasinonaktif', $val->id) }}"
                                                            class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                    @endif
                                                    <button type="submit" class="btn btn-primary btn-sm editinformasi"
                                                        data-id="{{ $val->id }}"><i class="fa fa-pencil"></i></button>
                                                    <a href="{{ route('admin.informasidestroy', $val->id) }}"
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
    </div>

@endsection

@section('js')
    <script>
        $('.editinformasi').click(function() {
            var id = $(this).data('id');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('admin.informasiedit') }}",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    console.log(data);
                    $('#idedit').val(data.id);
                    $('#nama').val(data.nama);
                    $('#tanggal').val(data.tanggal);
                }
            });
        });
    </script>
@endsection
