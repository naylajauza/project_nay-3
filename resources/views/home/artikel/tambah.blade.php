@extends('layouts.master')
@section('title','Halaman Tambah Data')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h4>Halaman Tambah Data</h4>
                                </center>
                            </div>
                            <div class="card-body">
                                <form action="/admin/artikel/simpan" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" class="form-label">Judul</label>
                                        <input type="text" name="judul" class="form-control" placeholder="Masukan Judul" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" placeholder="Masukan Tanggal" required>
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
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" placeholder="Masukan Deskripsi" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="cover" class="form-label">Cover</label>
                                        <input class="form-control" name="cover" type="file" id="formFile">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-secondary">Batal</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
