@extends('layouts/app')
@section('content')
 <div class="card mb-4">
                            <div class="card-header d-flex flex-warp justify-content-center justify-content-xl-between">
                                <div class="mb-1 mr-2">
                                    <a href="{{ route('userCreate') }}" class="btn btn-primary" >+ Tambah</a>
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
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>
                                                <span class="badge badge-info">{{ $item->email }}</span>
                                            </td>
                                            <td>
                                                @if($item->jabatan == 'Admin')
                                                    <span class="badge badge-success">{{ $item->jabatan }}</span>
                                                @else
                                                    <span class="badge badge-danger">{{ $item->jabatan }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($item->is_tugas == 1)
                                                    <span class="badge badge-success">Sudah Ditugaskan</span>
                                                @else
                                                    <span class="badge badge-danger">Belum Ditugaskan</span>
                                                @endif    
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter{{ $item->id }}"><i class="fas fa-trash"></i></button>
                                                <a href="{{ route('userEdit', $item->id) }}" class="btn btn-warning" ><i class="fas fa-edit"></i></a>
                                                @include('layouts/modal')
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection