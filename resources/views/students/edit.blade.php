@extends('layout/main')

@section('title',  'Form Ubah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="rom">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

            <form method="post" action="/students/{{ $student->id }}">
            @method('patch')
            @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama" name="nama" value="{{ $student->nama }}">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label">NRP</label>
                    <input type="text" id="nrp" class="form-control @error('nrp') is-invalid @enderror" placeholder="Masukan NRP" name="nrp" value="{{ $student->nrp }}">
                    @error('nrp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan Email" name="email" value="{{ $student->email }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror" placeholder="Masukan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
                    @error('jurusan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary" name="">Ubah Data!</button>
            </form>

        </div>
    </div>
</div>
@endsection