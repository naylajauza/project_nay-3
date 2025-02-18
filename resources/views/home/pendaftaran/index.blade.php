@extends('layouts.master')
@section('title','Pendaftaran')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h3>Halaman Pendaftaran</h3>
                                    <a href="/admin/pendaftaran/tambah" class="btn btn-primary">Tambah Data </a>
                                </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO/ID</th>
                                                <th scope="col">Nama Siswa</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No Telepon</th>
                                                <th scope="col">Tanggal Lahir</th>
                                                <th scope="col">Tanggal Pendaftaran</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pendaftaran as $u)
                                            <tr class="">
                                                <td scope="row">{{$u->id}}</td>
                                                <td>{{$u->namasiswa}}</td>
                                                <td>{{$u->alamat}}</td>
                                                <td>{{$u->no_tlp}}</td>
                                                <td>{{$u->tgl_lahir}}</td>
                                                <td>{{$u->tgl_pendaftaran}}</td>
                                                <td>{{$u->status}}</td>
                                                <td>
                                                    <a href="/admin/pendaftaran/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/admin/pendaftaran/{{$u->id}}/hapus" class="btn btn-danger" onclick="return confirm('yakin?')">Hapus</a>
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
