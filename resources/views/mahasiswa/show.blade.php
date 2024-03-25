@extends ('mahasiswa.layout')
@section('content')
<div class="row">
    <div class="col-1g-12 margin-tb">
        <div class="pull-left">
            <h2> Show Mahasiswa Data's</h2>
        </div>
        <div class="pull-right"> <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIM:</strong> &nbsp {{ $mhs->nim }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama:</strong> &nbsp {{ $mhs->nama }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jurusan:</strong> &nbsp {{ $mhs->jurusan }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat:</strong> &nbsp {{ $mhs->alamat }}
        </div>
    </div>
</div>
@endsection
