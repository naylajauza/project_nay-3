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
                                <form action="/admin/testimoni/simpan" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Siswa</label>
                                    <input type="text" name="nama_siswa" class="form-control" placeholder="Masukan Nama Siswa" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Pencapaian</label>
                                    <input type="text" name="pencapaian" class="form-control" placeholder="Masukan Pencapaian" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Cover</label>
                                    <input type="text" name="cover" class="form-control" placeholder="Masukan Cover" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Pesan</label>
                                    <input type="text" name="pesan" class="form-control" placeholder="Masukan Pesan" required>
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
