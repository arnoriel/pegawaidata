@extends('layouts.style')

@section('content')  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card">
                <div class="card-header">Data Pegawai</div>
                <div class="card-body">
                    <form action="{{route('pegawai.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan Nama pegawai</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Pegawai">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                             <label for="">Masukan Telepon</label>
                             <input type="number" name="telepon" class="form-control @error('telepon') is-invalid @enderror"  placeholder="Masukkan Nomor Telepon">
                            @error('telepon')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                              @enderror
                              <label for="">Masukan Alamat</label>
                              <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"  placeholder="Masukkan Nomor alamat">
                             @error('alamat')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection