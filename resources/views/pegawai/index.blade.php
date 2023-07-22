@extends('layouts.style')

@section('content')

<div class="container">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card">
                <div class="card-header">
                    Data pegawai
                    <a href="{{route('pegawai.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data</a>
                </div>
                <div class="car-body">
                    <div class="table-responsive">
                        <table class="table" id="pegawai">
                            <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama pegawai</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1 @endphp  
                            @foreach ($pegawai as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->telepon}}</td>
                                    <td>{{$data->alamat}}</td>
                                    <td>
                                        <form action="{{route('pegawai.destroy',$data->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{route('pegawai.edit',$data->id)}}" class="btn btn-outline-info"><i class="bi bi-pencil-square"></i></a>
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus')"><i class="bi bi-trash"></i></button>
                                        </form>
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
@endsection