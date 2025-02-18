@extends('layouts.master')
@section('title','User')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h3>Halaman Akun</h3>
                                    <a href="/admin/user/tambah" class="btn btn-primary">Tambah Data </a>
                                </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO/ID</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Level</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Tanggal Dibuat</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $u)
                                            <tr class="">
                                                <td scope="row">{{$u->id}}</td>
                                                <td>{{$u->nama}}</td>
                                                <td>{{$u->level}}</td>
                                                <td>{{$u->username}}</td>
                                                <td>{{$u->created_at}}</td>
                                                <td>
                                                    <a href="/admin/user/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/admin/user/{{$u->id}}/hapus" class="btn btn-danger" onclick="return confirm('yakin?')">Hapus</a>
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
