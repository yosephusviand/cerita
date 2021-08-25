@extends('layouts.lucid')
@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-6 ">
                        <h2>Unggah Karya</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Unggah Karya</li>
                        </ul>
                    </div>
                    <div class="col-6 text-right">
                        <div class="form-group">
                            <a href="{{ url('/') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card" style="opacity: 90%">
                        <div class="body">
                            <label for="">Syarat dan Ketentuan</label>
                            <div class="accordion" id="accordion">
                                <div>
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Cernak
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li>Karya bertema wawasan kebangsaan dan nasionalisme.</li>
                                                <li>Karya ditulis dalam Bahasa Indonesia yang literer (indah, menarik,
                                                    mengalir) serta komunikatif. Diperbolehkan menggunakan bahasa gaul dan
                                                    bahasa daerah dalam dialog para tokohnya (jika diperlukan dan sesuai
                                                    dengan tema).</li>
                                                <li>Karya ditulis di kertas ukuran A4, diketik berjarak 1,5 spasi, font 11,
                                                    huruf Arial, margin justified 3 cm. </li>
                                                <li>Panjang karya cerita anak antara 2 - 4 halaman.</li>
                                                <li>Karya tidak berisi diskriminasi SARA, melanggar kesusilaan, dan
                                                    pornografi.</li>
                                                <li>arya yang dikirim belum dan tidak akan pernah dimuat/diterbitkan dalam
                                                    media lain.</li>
                                                <li>Karya 100% merupakan karangan sendiri, buat hasil plagiarisme, saduran,
                                                    kutipan, atau terjemahan karya orang lain. </li>
                                                <li>Karya dilampiri dengan biodata singkat dan foto penulis (tidak wajib).
                                                </li>
                                                <li>Semua karya yang dikirim (baik yang dimuat maupun tidak) akan menjadi
                                                    hak milik dari Badan Kesatuan Bangsa dan Politik Kabupaten Gunungkidul.
                                                </li>
                                                <li>Badan Kesatuan Bangsa dan Politik Kabupaten Gunungkidul berhak melakukan
                                                    editing dan penyuntingan terhadap karya yang masuk, baik bersifat
                                                    parsial maupun keseluruhan.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Komik
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li>Karya bertema wawasan kebangsaan dan nasionalisme.</li>
                                                <li>Karya ditulis dalam Bahasa Indonesia yang literer (indah, menarik,
                                                    mengalir) serta komunikatif. Diperbolehkan menggunakan bahasa gaul dan
                                                    bahasa daerah dalam dialog para tokohnya (jika diperlukan dan sesuai
                                                    dengan tema).</li>
                                                <li>Karya ditulis di kertas ukuran A4, diketik berjarak 1,5 spasi, font 11,
                                                    huruf Arial, margin justified 3 cm, dan sudah dilengkapi dengan gambar
                                                    ilustrasi. </li>
                                                <li>Panjang karya komik antara 2 - 15 halaman.</li>
                                                <li>Karya tidak berisi diskriminasi SARA, melanggar kesusilaan, dan
                                                    pornografi.</li>
                                                <li>Karya yang dikirim belum dan tidak akan pernah dimuat/diterbitkan dalam
                                                    media lain.</li>
                                                <li>Karya 100% merupakan karangan sendiri, buat hasil plagiarisme, saduran,
                                                    kutipan, atau terjemahan karya orang lain. </li>
                                                <li>Karya dilampiri dengan biodata singkat dan foto penulis (tidak wajib).
                                                </li>
                                                <li>Semua karya yang dikirim (baik yang dimuat maupun tidak) akan menjadi
                                                    hak milik dari Badan Kesatuan Bangsa dan Politik Kabupaten Gunungkidul.
                                                </li>
                                                <li>Badan Kesatuan Bangsa dan Politik Kabupaten Gunungkidul berhak melakukan
                                                    editing dan penyuntingan terhadap karya yang masuk, baik bersifat
                                                    parsial maupun keseluruhan.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Pictbook
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li>Karya bertema wawasan kebangsaan dan nasionalisme.</li>
                                                <li>Karya ditulis dalam Bahasa Indonesia yang literer (indah, menarik,
                                                    mengalir) serta komunikatif. Diperbolehkan menggunakan bahasa gaul dan
                                                    bahasa daerah dalam dialog para tokohnya (jika diperlukan dan sesuai
                                                    dengan tema).</li>
                                                <li>Karya ditulis di kertas ukuran A4, diketik berjarak 1,5 spasi, font 11,
                                                    huruf Arial, margin justified 3 cm, dan sudah dilengkapi dengan gambar
                                                    ilustrasi. </li>
                                                <li>Panjang karya picturebook antara 2 - 15 halaman.</li>
                                                <li>Karya tidak berisi diskriminasi SARA, melanggar kesusilaan, dan
                                                    pornografi.</li>
                                                <li>Karya yang dikirim belum dan tidak akan pernah dimuat/diterbitkan dalam
                                                    media lain.</li>
                                                <li>Karya 100% merupakan karangan sendiri, buat hasil plagiarisme, saduran,
                                                    kutipan, atau terjemahan karya orang lain. </li>
                                                <li>Karya dilampiri dengan biodata singkat dan foto penulis (tidak wajib).
                                                </li>
                                                <li>Semua karya yang dikirim (baik yang dimuat maupun tidak) akan menjadi
                                                    hak milik dari Badan Kesatuan Bangsa dan Politik Kabupaten Gunungkidul.
                                                </li>
                                                <li>Badan Kesatuan Bangsa dan Politik Kabupaten Gunungkidul berhak melakukan
                                                    editing dan penyuntingan terhadap karya yang masuk, baik bersifat
                                                    parsial maupun keseluruhan.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                Pantun & Puisi
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li>Karya bertema wawasan kebangsaan dan nasionalisme.</li>
                                                <li>Karya ditulis dalam Bahasa Indonesia yang literer (indah, menarik,
                                                    mengalir) serta komunikatif.</li>
                                                <li>Karya ditulis di kertas ukuran A4, diketik berjarak 1,5 spasi, font 11,
                                                    huruf Arial, margin justified 3 cm. </li>
                                                <li>Panjang karya puisi / pantun minimal 3 bait (1 bait berisi minimal 4
                                                    baris).</li>
                                                <li>Karya tidak berisi diskriminasi SARA, melanggar kesusilaan, dan
                                                    pornografi.</li>
                                                <li>Karya yang dikirim belum dan tidak akan pernah dimuat/diterbitkan dalam
                                                    media lain.</li>
                                                <li>Karya 100% merupakan karangan sendiri, buat hasil plagiarisme, saduran,
                                                    kutipan, atau terjemahan karya orang lain. </li>
                                                <li>Karya dilampiri dengan biodata singkat dan foto penulis (tidak wajib).
                                                </li>
                                                <li>Semua karya yang dikirim (baik yang dimuat maupun tidak) akan menjadi
                                                    hak milik dari Badan Kesatuan Bangsa dan Politik Kabupaten Gunungkidul.
                                                </li>
                                                <li>Badan Kesatuan Bangsa dan Politik Kabupaten Gunungkidul berhak melakukan
                                                    editing dan penyuntingan terhadap karya yang masuk, baik bersifat
                                                    parsial maupun keseluruhan.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card" style="opacity: 90%">
                        <div class="body">
                            <form action="{{ route('karya.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Pengirim</label>
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
                                    <input type="number" name="nohp" class="form-control" id="nohp" placeholder="Tuliskan "
                                        value="" autocomplete="off" required>
                                    @error('nohp') <div class="small text-danger">{{ message }}</div> @enderror
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
                                        <option value="" disabled selected hidden>Pilih </option>
                                        <option value="1">Cernak</option>
                                        <option value="2">Komik</option>
                                        <option value="3">Pitcbook</option>
                                        <option value="4">Puisi & Pantun</option>
                                    </select>
                                    @error('kategori') <div class="small text-danger">{{ message }}</div> @enderror
                                </div>
                                <label for="">Upload File PDF</label>
                                <div class="form-group shadow">
                                    <input type="file" name="file" class="dropify" data-allowed-file-extensions="pdf"
                                        accept="application/pdf, application/PDF">
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
@endsection
