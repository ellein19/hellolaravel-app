@extends('mahasiswa.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> CRUD Operasi di Laravel 10 </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Create New Mahasiswa Data's</a>
        </div>
    </div>
</div>
@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th width="289px">Action</th>
    </tr>
    @forelse($Listmhs as $mhs)
    <tr>
        <td>{{ $mhs->id }}</td>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->jurusan }}</td>
        <td>{{ $mhs->alamat }}</td>
        <td>
            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST">
                @csrf
                <a class="btn btn-info" href="{{ route('mahasiswa.show', $mhs->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6" class="text-center">Data belum Tersedia.</td>
    </tr>
    @endforelse
</table>
{{ $Listmhs->links() }}
@endsection
