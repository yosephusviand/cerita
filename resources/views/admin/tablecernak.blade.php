<div class="card">
    <div class="header">
        <h2>Data Akun </h2>
        <div class="table-responsive">
            <table class="table table-hover js-basic-example dataTable table-custom table-bordered table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
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
                            <td>{{ $val->judul }}</td>
                            <td>
                                <a href="{{ route('cernak.pdfdownload', $val->id) }}" class="btn btn-info"><i
                                        class="fa fa-cloud-download"></i></a>
                                <a href="{{ route('cernak.previewpdf', $val->id) }}" class="btn btn-default"
                                    target="_blank"><i class="fa fa-file-pdf-o"></i></a>
                            </td>
                            <td>{{ $val->status_name }}</td>
                            <td>
                                @if ($val->status == 1)
                                    <button type="submit" class="btn btn-warning btn-sm tampilkan"
                                        data-id="{{ $val->id }}"><i class="fa fa-eye"></i></button>
                                @else
                                    <button type="submit" class="btn btn-info btn-sm nottampil"
                                        data-id="{{ $val->id }}"><i class="fa fa-eye"></i></button>
                                @endif
                                <button type="button" class="btn btn-primary btn-sm editkarya"
                                    data-id="{{ $val->id }}"><i class="fa fa-pencil"></i></button>
                                <a href="{{ route('admin.karyadestroy', $val->id) }}" class="btn btn-danger btn-sm"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    $('.editkarya').click(function() {
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
                $('[name="idedit"]').val(data.id);
                $('[name="nama"]').val(data.nama);
                $('[name="judul"]').val(data.judul);
                $('[name="kategori"]').val(data.jenis);
            }
        });
    });

    $('.tampilkan').click(function() {
        var id = $(this).data('id');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ route('admin.karyatampil') }}",
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                showNotif('Berhasil Di Tampilakan');
                $('#tablecernak').load("{{ route('admin.tablecernak') }}");
                $('#tablekomik').load("{{ route('admin.tablekomik') }}");
            }
        });

    });

    $('.nottampil').click(function() {
        var id = $(this).data('id');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ route('admin.karyatidaktampil') }}",
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                showNotif('Tidak Di Tampilakan');
                $('#tablecernak').load("{{ route('admin.tablecernak') }}");
                $('#tablekomik').load("{{ route('admin.tablekomik') }}");
            }
        });

    });
</script>
