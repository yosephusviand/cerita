@extends('layouts.admin')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col">
                        <h2>Puisi & Pantun</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Puisi & Pantun</li>
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
                                        value="" autocomplete="off" required>
                                    @error('nama') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat"
                                        placeholder="Tuliskan " value="" autocomplete="off" required>
                                    @error('alamat') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">No HP</label>
                                    <input type="number" name="notelp" class="form-control" id="notelp"
                                        placeholder="Tuliskan " value="" autocomplete="off" required>
                                    @error('notelp') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Tuliskan "
                                        value="" autocomplete="off" required>
                                    @error('judul') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Jenis Karya</label>
                                    <select name="kategori" class="form-control" id="kategori">
                                        <option value="4" selected>Puisi & Pantun</option>
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
                    <div class="card">
                        <div class="card">
                            <div class="header">

                                <div class="table-responsive">
                                    <table
                                        class="table table-hover js-basic-example dataTable table-custom table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>No HP</th>
                                                <th>Judul</th>
                                                <th>Download/Baca</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $i => $val)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $val->nama }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>{{ $val->judul }}</td>
                                                    <td>
                                                        <a href="{{ route('cernak.pdfdownload', $val->id) }}"
                                                            class="btn btn-info"><i class="fa fa-cloud-download"></i></a>
                                                        <a href="{{ route('cernak.previewpdf', $val->id) }}"
                                                            class="btn btn-default" target="_blank"><i
                                                                class="fa fa-file-pdf-o"></i></a>
                                                    </td>
                                                    <td>{{ $val->status_name }}</td>
                                                    <td>
                                                        @if ($val->status == 1)
                                                            <a href="{{ route('admin.karyatampil', $val->id) }}"
                                                                class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                                        @else
                                                            <a href="{{ route('admin.karyatidaktampil', $val->id) }}"
                                                                class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                        @endif
                                                        <button type="button" class="btn btn-primary btn-sm editkaryapuisi"
                                                            id="editkaryapuisi" data-id="{{ $val->id }}"><i
                                                                class="fa fa-pencil"></i></button>
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
        </div>
    </div>

@stop

@section('js')
    <script>
        $('#editkaryapuisi').click(function() {
            var id = $(this).data('id');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('admin.karyaedit') }}",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    console.log(data);
                    $('[name="idedit"]').val(data.id);
                    $('[name="nama"]').val(data.nama);
                    $('[name="judul"]').val(data.judul);
                }
            });
        });
    </script>
@stop
