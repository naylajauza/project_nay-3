@extends('layouts.master')
@section('title','Kategori')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h3>Halaman Kategori</h3>
                                    <a href="/admin/kategori/tambah" class="btn btn-primary">Tambah Data </a>
                                </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO/ID</th>
                                                <th scope="col">Nama Kategori</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kategori as $u)
                                            <tr class="">
                                                <td scope="row">{{$u->id}}</td>
                                                <td>{{$u->nama_kategori}}</td>
                                                <td>
                                                    <a href="/admin/kategori/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/admin/kategori/{{$u->id}}/hapus" class="btn btn-danger" onclick="return confirm('yakin?')">Hapus</a>
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
