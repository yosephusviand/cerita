<div class="card">
    <div class="header">

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
                                    <a href="{{ route('admin.karyatampil', $val->id) }}"
                                        class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                @else
                                    <a href="{{ route('admin.karyatidaktampil') }}" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye"></i></a>
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



