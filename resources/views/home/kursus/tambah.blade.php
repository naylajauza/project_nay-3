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
                                <form action="admin/kursus/simpan" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Kursus</label>
                                    <input type="text" name="nama_kursus" class="form-control" placeholder="Masukan Nama Kursus" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" placeholder="Masukan Deskripsi" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Harga</label>
                                    <input type="text" name="harga" class="form-control" placeholder="Masukan Harga" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Durasi</label>
                                    <input type="text" name="durasi" class="form-control" placeholder="Masukan Durasi" required>
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
