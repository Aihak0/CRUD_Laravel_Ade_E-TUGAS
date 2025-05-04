@extends('layouts/app')
@section('content')
                <div class="card mb-4">
                            <div class="card-header d-flex flex-warp justify-content-center justify-content-xl-between">
                                <div class="mb-1 mr-2">
                                    <a href="{{ route('tugas') }}" class="btn btn-success" ><- Kembali</a>
                                </div>
                            </div>
                            <div class="card-body">
                            <form action="{{ route('tugasStore') }}" method="POST">
                                @csrf
                                    <div class="form-group">
                                    <label for="inputNama">Nama</label>
                                    <select id="inputNama" class="form-control @error('user_id') is-invalid @enderror" name="user_id">
                                        <option selected disabled>Pilih...</option>
                                        @foreach($user as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                    </div>
                                
                                <div class="form-group ">
                                <label for="inputTugas">Tugas</label>
                                <textarea rows  ="10" class="form-control @error('tugas') is-invalid @enderror" id="inputTugas" placeholder="Tugas" name="tugas" value="{{ old('tugas') }}"></textarea>
                                @error('tugas')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputPass">Tanggal Mulai</label>
                                    <input type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" id="inputPass" placeholder="Tanggal Mulai" name="tanggal_mulai">
                                    @error('tanggal_mulai')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPassKon">Tanggal Selesai</label>
                                    <input type="date" class="form-control @error('tanggal_selesai') is-invalid @enderror" id="inputPassKon" placeholder="Tanggal Selesai" name="tanggal_selesai">
                                    </div>
                                </div>  
                                
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
@endsection