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
                                <form action="/admin/pendaftaran/simpan" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Siswa</label>
                                    <input type="text" name="namasiswa" class="form-control" placeholder="Masukan Nama Siswa" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">No Telepon</label>
                                    <input type="text" name="no_tlp" class="form-control" placeholder="Masukan No Telepon" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukan Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Tanggal Pendaftaran</label>
                                    <input type="date" name="tgl_pendaftaran" class="form-control" placeholder="Masukan Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Status</label>
                                    <input type="text" name="status" class="form-control" placeholder="Masukan Status" required>
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
