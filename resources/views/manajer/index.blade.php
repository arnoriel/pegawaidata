@extends('layouts.stylem')

@section('content')

<div class="container">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card">
                <div class="card-header">
                    Data pegawai
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
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1 @endphp  
                            @foreach ($pegawai as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->telepon}}</td>
                                    <td>{{$item->alamat}}</td>
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