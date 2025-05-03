@extends('layouts/app')
@section('content')
                <div class="card mb-4">
                            <div class="card-header d-flex flex-warp justify-content-center justify-content-xl-between">
                                <div class="mb-1 mr-2">
                                    <a href="{{ route('user') }}" class="btn btn-success" ><- Kembali</a>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-success" >Excel</a>
                                    <a href="#" class="btn btn-danger" >PDF</a>
                                </div>
                            </div>
                            <div class="card-body">
                            <form action="{{ route('userStore') }}" method="POST">
                            @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputNama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputNama" placeholder="Nama" name="nama" value="{{ old('nama') }}">
                                    @error('nama')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" placeholder="Email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputJabatan">Jabatan</label>
                                    <select id="inputJabatan" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan">
                                        <option selected disabled>Pilih...</option>
                                        <option vlaue="Admin">Admin</option>
                                        <option value=Karyawan>Karyawan</option>
                                    </select>
                                    @error('jabatan')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputPass">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPass" placeholder="Password" name="password">
                                    @error('password')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPassKon">Pasword Konfirmasi</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassKon" placeholder="Password Konfirmasi" name="password_confirmation">
                                    </div>
                                </div>  
                                
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
@endsection