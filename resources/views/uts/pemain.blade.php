@extends('uts.master')

@section('title', 'Data Pemain')

@section('content')
    <table border="1px" class="table table-striped">
        <thead>
            <th>id</th>
            <th>nama pemain</th>
            <th>no punggung</th>
            <th>posisi</th>
        </thead>
        <tbody>
            @php $no = 0; @endphp
            @foreach ($data_pemain as $pemain)
                <tr>
                    <td> {{ ++$no }} </td>
                    <td> {{ $pemain->nama_pemain }} </td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
