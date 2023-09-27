<!DOCTYPE html>
<html>
<head>
    <title>Model</title>
</head>
<body>
<table border="1px" class="table table-striped">
    <thead>
        <th>id</th>
        <th>judul buku</th>
        <th>penulis</th>
        <th>harga</th>
        <th>tanggal terbit</th>
</thead>
<tbody>
    @php $no = 0; @endphp
    @foreach ($data_buku as $buku)
        <tr>
            <td> {{ ++$no }} </td>
            <td> {{ $buku->judul }} </td>
            <td> {{ $buku->penulis }} </td>
            <td> {{ "Rp".number_format($buku->harga, 2, ',',',') }} </td>
            <td> {{ date('d/m/Y', strtotime($buku->tgl_terbit)) }} </td>
</tr>
@endforeach
</tbody>
</table>
<div>
    <p>Jumlah Data Buku: {{ $jumlah_buku }}</p>
    <p>Jumlah Total Harga Semua Buku: {{ "Rp".number_format($jumlah_harga, 2, ',', ',') }}</p>
</div>
</body>
</html>
