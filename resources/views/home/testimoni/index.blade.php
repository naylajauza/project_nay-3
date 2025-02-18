@extends('layouts.master')
@section('title','Testimoni')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h3>Halaman Testimoni</h3>
                                    <a href="admin/testimoni/tambah" class="btn btn-primary">Tambah Data </a>
                                </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO/ID</th>
                                                <th scope="col">Nama Siswa</th>
                                                <th scope="col">Pencapaian</th>
                                                <th scope="col">Cover</th>
                                                <th scope="col">Pesan</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($testimoni as $u)
                                            <tr class="">
                                                <td scope="row">{{$u->id}}</td>
                                                <td>{{$u->nama_siswa}}</td>
                                                <td>{{$u->pencapaian}}</td>
                                                <td>{{$u->cover}}</td>
                                                <td>{{$u->pesan}}</td>
                                                <td>
                                                    <a href="admin/testimoni/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="admin/testimoni/{{$u->id}}/hapus" class="btn btn-danger" onclick="return confirm('yakin?')">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
