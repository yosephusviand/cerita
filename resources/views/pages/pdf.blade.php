<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <style>
        body {
            font-family: Denk One, sans-serif;
            background-image: url('img/piagamc.jpg');
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
    <table width="100%">
        <th></th>

        <th width="500px" style="text-align: center">Nomor : </th>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    {{-- <br> --}}
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
            <td>
                <div class="form-group" style="text-align: center">
                    <img src="data:image/png;base64, {!! $qrcode !!}">
                </div>
            </td>
            <td style="text-align: center"><img src="./img/profilee.png" width="80px"></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center">Yosephus, MM</td>
        </tr>
    </table>

</body>

</html>
