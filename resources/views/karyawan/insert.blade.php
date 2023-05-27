@extends('layout.app')
@section('title','karyawan')
@section('content')
<h1 class="h3 mb-2 text-gray-800">Tambah Karyawan</h1>
<div class="row">
    <div class="col-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Karyawan</h6>
            </div>
            <div class="card-body">
                <form action="{{route('karyawan.add.insert')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control">
                        @error('nama')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                        @error('nama')
                        {{$message}}
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                        @error('nama')
                        {{$message}}
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="">No_Tlpn</label>
                        <input type="number" name="no_tlpn" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm float-right"><i class="fas fa-save"></i> Simpan</button>
                </form>
            </div>
        </div> 
    </div>
</div>
@endsection