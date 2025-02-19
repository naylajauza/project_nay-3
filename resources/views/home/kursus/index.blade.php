@extends('layouts.master')
@section('title','Kursus')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h3>Halaman Kursus</h3>
                                    <a href="/admin/kursus/tambah" class="btn btn-primary">Tambah Data </a>
                                </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO/ID</th>
                                                <th scope="col">Nama Kursus</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Durasi</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $i=0
                                        @endphp
                                        <tbody>
                                            @foreach ($kursus as $u)
                                            <tr class="">
                                                <td scope="row">{{++$i}}</td>
                                                <td>{{$u->nama_kursus}}</td>
                                                <td>{{$u->deskripsi}}</td>
                                                <td>{{$u->harga}}</td>
                                                <td>{{$u->durasi}}</td>
                                                <td>
                                                    <a href="/admin/kursus/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/admin/kursus/{{$u->id}}/hapus" class="btn btn-danger" onclick="return confirm('yakin?')">Hapus</a>
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
