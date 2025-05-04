@extends('layouts/app')
@section('content')
                <div class="card mb-4">
                            <div class="card-header d-flex flex-warp justify-content-center justify-content-xl-between">
                                <div class="mb-1 mr-2">
                                    <a href="{{ route('user') }}" class="btn btn-success" ><- Kembali</a>
                                </div>
                            </div>
                            <div class="card-body">
                            <form action="{{ route('tugasUpdate', $tugas->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                    <label for="inputNama">Nama</label>
                                    <input type="text" id="inputNama" class="form-control" value="{{ $tugas->user->nama }}" disabled>
                                    </div>
                                
                                <div class="form-group ">
                                <label for="inputTugas">Tugas</label>
                                <textarea rows="10" class="form-control @error('tugas') is-invalid @enderror" id="inputTugas" placeholder="Tugas" name="tugas" value="{{ old('tugas') }}">{{ $tugas->tugas }}</textarea>
                                @error('tugas')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputPass">Tanggal Mulai</label>
                                    <input type="date" value="{{ $tugas->tanggal_mulai }}" class="form-control @error('tanggal_mulai') is-invalid @enderror" id="inputPass" placeholder="Tanggal Mulai" name="tanggal_mulai">
                                    @error('tanggal_mulai')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPassKon">Tanggal Selesai</label>
                                    <input type="date" value="{{ $tugas->tanggal_selesai }}" class="form-control @error('tanggal_selesai') is-invalid @enderror" id="inputPassKon" placeholder="Tanggal Selesai" name="tanggal_selesai">
                                    </div>
                                </div>  
                              
                                
                                <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                            </div>
                        </div>
@endsection