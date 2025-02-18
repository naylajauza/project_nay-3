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
                            <form action="admin/kategori/{{$kategori->id}}/update" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Nama Kategori</label>
                                <input type="text" name="nama_kategori" value="{{$kategori->nama_kategori}}" class="form-control" placeholder="Masukan Nama Kategori" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="admin/kategori" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
