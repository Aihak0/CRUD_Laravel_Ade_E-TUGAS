@extends('layouts/app')
@section('content')
            <div class="card mb-4">
                            <div class="card-header d-flex flex-warp justify-content-center justify-content-xl-between">
                                <div class="mb-1 mr-2">
                                    
                                </div>
                                <div>
                                @if(auth()->user()->is_tugas == true)
                                <a href="{{ route('tugasPdf') }}" class="btn btn-danger" target="__blank" >PDF</a>
                                @endif
                                </div>
                            </div>
                            <div class="card-body">
                                @if(auth()->user()->is_tugas == true)
                                    <div class="row">
                                        <div class="col-6">
                                            Nama
                                        </div>
                                        <div class="col-6">
                                            : {{ $tugas->user->nama }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            Email
                                        </div>
                                        <div class="col-6">
                                            : {{ $tugas->user->email }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            Tugas
                                        </div>
                                        <div class="col-6">
                                            : {{ $tugas->tugas }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            Tanggal Mulai
                                        </div>
                                        <div class="col-6">
                                            : {{ $tugas->tanggal_mulai }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            Tanggal Selesai
                                        </div>
                                        <div class="col-6">
                                            : {{ $tugas->tanggal_selesai }}
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <span class="badge badge-danger">Belum ditugaskan</span>
                                    </div>

                                @endif

                                
                                
                            </div>
                        </div>
@endsection