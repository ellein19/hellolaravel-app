@extends('mahasiswa.layout')
@section ('content')
<div class="row">
    <div class="col-1g-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Mahasiswa Data's</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}"> Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Error!</strong> <br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>｛｛ $error ｝｝</1i>
            @endforeach
    </ul>
</div>
@endif

<form action="{{ route('mahasiswa.update', $mhs->id) }}" method="POST">
    @csrf
    @method ('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIM:</strong>
                <input type="text" name="nim" class="form-control" | value="{{ $mhs->nim }}"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}"></input>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jurusan:</strong>
                    <input type="text" name="jurusan" class="form-control" value="{{ $mhs->jurusan }}"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" class="form-control" value="{{ $mhs->alamat }}"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
@endsection
