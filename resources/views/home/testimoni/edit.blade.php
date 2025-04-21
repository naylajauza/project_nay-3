@extends('layouts.master')
@section('title','Halaman Edit Data')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <center><h4>Halaman Edit Data</h4></center>
                        </div>
                        <div class="card-body">
                            <form action="/admin/testimoni/{{$testimoni->id}}/update" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input type="text" name="nama_siswa" value="{{ $testimoni->nama_siswa }}" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Pencapaian</label>
                                    <input type="text" name="pencapaian" value="{{ $testimoni->pencapaian }}" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label>Cover</label>
                                    <input class="form-control" name="cover" type="file">

                                    @if($testimoni->cover)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $testimoni->cover) }}" alt="Cover" width="150">
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Pesan</label>
                                    <input type="text" name="pesan" value="{{ $testimoni->pesan }}" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/admin/testimoni" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
