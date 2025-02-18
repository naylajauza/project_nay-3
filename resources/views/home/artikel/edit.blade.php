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
                            <form action="admin/artikel/{{$artikel->id}}/update" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Judul</label>
                                <input type="text" name="judul" value="{{$artikel->judul}}" class="form-control" placeholder="Masukan Judul" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" value="{{$artikel->tanggal}}" class="form-control" placeholder="Masukan artikelname" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Kategori</label>
                                <select name="id_kategori" id="" class="form-control">
                                    @foreach ($kategori as $u)
                                        <option value="{{$u->id}}">{{$u->nama_kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" value="{{$artikel->deskripsi}}" class="form-control" placeholder="Deskripsi artikelname" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Cover</label>
                                <input type="text" name="cover" value="{{$artikel->cover}}" class="form-control" placeholder="Masukan Cover" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="admin/artikel" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
