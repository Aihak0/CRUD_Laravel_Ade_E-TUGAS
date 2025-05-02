@extends('layouts/app')
@section('content')
 <div class="card mb-4">
                            <div class="card-header d-flex flex-warp justify-content-center justify-content-xl-between">
                                <div class="mb-1 mr-2">
                                    <a href="#" class="btn btn-primary" >+ Tambah</a>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-success" >Excel</a>
                                    <a href="#" class="btn btn-danger" >PDF</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                </div>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Joko</td>
                                            <td>Admin@gmail</td>
                                            <td>Admin</td>
                                            <td>active</td>
                                            <td>
                                                <a href="#" class="btn btn-danger" >Hapus</a>
                                                <a href="#" class="btn btn-warning" >Edit</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection