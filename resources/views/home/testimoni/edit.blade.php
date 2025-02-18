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
                            <center>
                                <h4>Halaman Edit Data</h4>
                            </center>
                        </div>
                        <div class="card-body">
                            <form action="/admin/testimoni/{{$testimoni->id}}/update" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Nama Siswa</label>
                                <input type="text" name="nama_siswa" value="{{$testimoni->nama_siswa}}" class="form-control" placeholder="Masukan Nama Siswa" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Pencapaian</label>
                                <input type="text" name="pencapaian" value="{{$testimoni->pencapaian}}" class="form-control" placeholder="Masukan Pencapaian" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Cover</label>
                                <input type="text" name="cover" value="{{$testimoni->cover}}" class="form-control" placeholder="Masukan Cover" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Pesan</label>
                                <input type="text" name="pesan" value="{{$testimoni->pesan}}" class="form-control" placeholder="Masukan Pesan" required>
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
