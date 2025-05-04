
        @extends('layouts/app')

        @section('content')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>

                        <div class="row">
                        @if(auth()->user()->jabatan == 'Admin')
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <div class="d-flex flex-warp justify-content-center justify-content-xl-between">
                                            <div >Total user</div>
                                            <div    >{{ $jumlahUser }}</div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                    <div class="d-flex flex-warp justify-content-center justify-content-xl-between">
                                            <div >Total Admin</div>
                                            <div >{{ $jumlahAdmin }}</div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">
                                    <div class="d-flex flex-warp justify-content-center justify-content-xl-between">
                                            <div >Total Karyawan</div>
                                            <div    >{{ $jumlahKaryawan }}</div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                    <div class="d-flex flex-warp justify-content-center justify-content-xl-between">
                                            <div >Total Ditugaskan</div>
                                            <div    >{{ $jumlahDitugaskan }}</div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                    <div class="d-flex flex-warp justify-content-center justify-content-xl-between">
                                            <div >Total Belum Ditugaskan</div>
                                            <div    >{{ $jumlahBelumDitugaskan }}</div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(auth()->user()->jabatan == 'Karyawan' && auth()->user()->is_tugas == true)
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                    <div class="d-flex flex-warp justify-content-center justify-content-xl-between">
                                            <div >Status</div>
                                            <div    >Dutugaskan</div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                    <div class="d-flex flex-warp justify-content-center justify-content-xl-between">
                                            <div >Status</div>
                                            <div    >Belum Ditugaskan</div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                       
                
                    </div>
                </main>
        @endsection
