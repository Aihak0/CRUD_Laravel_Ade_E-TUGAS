@extends('layouts/app')
@section('content')
 <div class="card mb-4">
                            <div class="card-header d-flex flex-warp justify-content-center justify-content-xl-between">
                                <div class="mb-1 mr-2">
                                    <a href="{{ route('tugasCreate') }}" class="btn btn-primary" >+ Tambah</a>
                                </div>
                                <div>
                                    <a href="{{ route('tugasExcel') }}" class="btn btn-success" >Excel</a>
                                    <a href="{{ route('tugasPdf') }}" class="btn btn-danger" target="__blank">PDF</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                </div>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tugas</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tugas as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $item->user->nama }}</td>
                                            <td>{{ $item->tugas }}</td>
                                            <td>
                                                <span class="badge badge-info">{{ $item->tanggal_mulai }}</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-info">{{ $item->tanggal_selesai }}</span>
                                            </td>
                                            
                                            <td class="text-center">
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter{{ $item->id }}"><i class="fas fa-trash"></i></button>
                                                <button class="btn btn-info" data-toggle="modal" data-target="#modalInfo{{ $item->id }}"><i class="fas fa-eye"></i></button>
                                                <a href="{{ route('tugasEdit', $item->id) }}" class="btn btn-warning" ><i class="fas fa-edit"></i></a>
                                                @include('admin/tugas/modal')
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection