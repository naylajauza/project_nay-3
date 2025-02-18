@extends('layouts.master')
@section('title','Artikel')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h3>Halaman Artikel</h3>
                                    <a href="admin/artikel/tambah" class="btn btn-primary">Tambah Data </a>
                                </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO/ID</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Cover</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($artikel as $u)
                                            <tr class="">
                                                <td scope="row">{{$u->id}}</td>
                                                <td>{{$u->judul}}</td>
                                                <td>{{$u->tanggal}}</td>
                                                <td>{{$u->kategori->nama_kategori}}</td>
                                                <td>{{$u->deskripsi}}</td>
                                                <td>{{$u->cover}}</td>
                                                <td>
                                                    <a href="admin/artikel/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="admin/artikel/{{$u->id}}/hapus" class="btn btn-danger" onclick="return confirm('yakin?')">Hapus</a>
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
