<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>
        Buku Tamu Pernikahan Tahun {{(int)date('Y')}}
    </title>
</head>
<body>
<style type="text/css">
    table tr td,
    table tr th {
        font-size: 12pt;
        border: 1px solid black;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    table tr th {
        text-align: center;
    }

    td {
        text-transform: capitalize;
        text-align: center;
        height: 0px !important;
    }

    .hang {
        text-indent: -2em;
        margin-left: 4em;
    }

</style>
<h5 style="text-align: center; margin-top: 5px; margin-bottom: 5px;">
    Buku Tamu Pernikahan Tahun {{(int)date('Y')}}
</h5>
<br>
@php date_default_timezone_set('Asia/Jakarta') @endphp
<pre>
Nama Pemilik Buku   : {{Auth::User()->name}}            {{date('l, j-F-Y')}}
Tamu Keseluruhan    : {{$data->count('id')}} Orang
Jumlah Tamu Baru    : {{$data->where('id_ket',1)->count('id')}} Orang
Jumlah Tamu Kembali : {{$data->where('id_ket',2)->count('id')}} Orang
Dikembalikan        : {{$data->where('id_ket',3)->count('id')}}
Total Uang          : Rp {{number_format($data->sum('uang'), 0, ',', '.')}}
Total Beras         : {{$data->sum('beras')}} Kg
Total Gula          : {{$data->sum('gula')}} Kg
</pre>
<table class=''>
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Tamu</th>
        <th>Alamat</th>
        <th>Uang (RP)</th>
        <th>Beras</th>
        <th>Gula</th>
        <th>Lain-lain</th>
        <th>Keterangan</th>
    </tr>
    </thead>
    <tbody>
    @php $i=1 @endphp
    @foreach($data as $p)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{$p->nama_tamu}}</td>
            <td>{{$p->alamat}}</td>
            <td>{{number_format($p->uang, 0, ',', '.')}}</td>
            <td>{{$p->beras}} Kg</td>
            <td>{{$p->gula}} Kg</td>
            <td>{{$p->lain}}</td>
            @if($p->id_ket == 1)
                <td style="color: #2a9055;text-align: center">{{$p->keterangan->keterangan}}</td>
            @elseif($p->id_ket == 2)
                <td style="color: #8a1f11;text-align: center">{{$p->keterangan->keterangan}}</td>
            @elseif($p->id_ket == 3)
                <td style="color: grey;text-align: center">{{$p->keterangan->keterangan}}</td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>

<footer class="footer">
    <div class="container">
        <div class="text-center" id="copyright">
            &copy; WeBook {{(int)date('Y')}}, <a href="http://www.acek.me">Razak Syaiful Rochman.</a>
        </div>
    </div>
</footer>
</body>
</html>
