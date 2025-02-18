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
                            <form action="/admin/kursus/{{$kursus->id}}/update" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Nama Kursus</label>
                                <input type="text" name="nama_kursus" value="{{$kursus->nama_kursus}}" class="form-control" placeholder="Masukan Nama Kursus" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" value="{{$kursus->deskripsi}}" class="form-control" placeholder="Masukan Deskripsi" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Harga</label>
                                <input type="text" name="harga" value="{{$kursus->harga}}" class="form-control" placeholder="Masukan Harga" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Durasi</label>
                                <input type="text" name="durasi" value="{{$kursus->durasi}}" class="form-control" placeholder="Masukan Durasi" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/admin/kursus" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
