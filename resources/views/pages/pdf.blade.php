<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <style>
        body {
            font-family: Denk One, sans-serif;
            background-image: url('img/bcpdf.jpg');
            background-position: top left;
            background-repeat: no-repeat;
            background-size: 100%;
            padding: 15px 100px 10px 100px;
            width: 100%;
            height: 100%;
        }

        ,

        as {
            font-size: 40px;
        }

    </style>
</head>

<body>
    <table width="100%" border="">
        <th></th>

        <th width="300px" style="text-align: center">Nomor : {{ $data->nosurat }}</th>
    </table>
    <table border="">
        <tr>
            <td rowspan=""><img src="./img/gk.png" alt="" width="80px"></td>
            <td style="text-align: left; font-size: 16px; line-height: 8px">
                <p><b>PEMERINTAH DAERAH</b></p>
                <p><b>KAPUTATEN GUNUNGKIDUL</b></p>
                <p><b>BADAN KESATUAN BANGSA DAN POLITIK</b></p>
            </td>
        </tr>
    </table>
    <table width="100%">
        <th style="font-size: 50px">PIAGAM PENGHARGAAN</th>
    </table>

    <table width="100%" border="">
        <th style="text-align: center; font-size: 18px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
            Diberikan kepada</th>
    </table>
    <br>
    <table width="100%" border="">
        <th style="text-align: center; font-size: 30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
            {{ $data->nama }}</th>
    </table>
    <br>
    @if ($data->jenis == 1)
        <table width="100%" border="">
            <tr>
                <th
                    style="text-align: center; font-size: 18px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                    Atas partisipasinya dalam mensukseskan
                </th>
            </tr>
            <tr>
                <th
                    style="text-align: center; font-size: 18px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                    Gerakan Migunani (Mari Gugah Nasionalisme Anak Dengan
                    Literasi)
                </th>
            </tr>
            <tr>
                <th
                    style="text-align: center; font-size: 18px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                    sebagai <b> Pembaca Aktif.</b>
                </th>
            </tr>
        </table>
    @else
        <table width="100%" border="">
            <tr>
                <th
                    style="text-align: center; font-size: 18px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                    Atas partisipasinya dalam mensukseskan
                </th>
            </tr>
            <tr>
                <th
                    style="text-align: center; font-size: 18px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                    Gerakan Migunani (Mari Gugah Nasionalisme Anak Dengan
                    Literasi)
                </th>
            </tr>
            <tr>
                <th
                    style="text-align: center; font-size: 18px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                    sebagai <b>Penulis Naskah.</b>
                </th>
            </tr>
        </table>
    @endif
    <br>
    <br>
    <table width="100%" border="">
        <tr>
            <th></th>
            <th></th>
            <th width="400px" style="text-align: center">Wonosari, {{ date('d-m-Y') }}</th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th style="text-align: center">{{ $ttd->jabatan }}</th>
        </tr>
        <tr>
            <th>
                <div class="form-group" style="text-align: center">
                    <img src="data:image/png;base64, {!! $qrcode !!}">
                </div>
            </th>
            <th></th>
            <th style="text-align: center"><img src="{{ $path }}" width="100px"></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th style="text-align: center">{{ $ttd->nama }}</th>
        </tr>
    </table>

</body>

</html>
