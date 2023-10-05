@extends('master')

@section('title', 'Data Barang')

@section('content')
    <table border="1px" class="table table-striped">
        <thead>
            <th>id</th>
            <th>nama barang</th>
            <th>harga</th>
            <th>stok</th>
            <th>id supplier</th>
        </thead>
        <tbody>
            @php $no = 0; @endphp
            @foreach ($data_barang as $barang)
                <tr>
                    <td> {{ ++$no }} </td>
                    <td> {{ $barang->nama_barang }} </td>
                    <td> {{ "Rp".number_format($barang->harga, 2, ',',',') }} </td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->id_supplier }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
