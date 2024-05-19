@extends('layouts.main')
@section('container')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12 position-relative z-index-2">
                <div class="row">
                    <div class="col-lg-4 col-sm-3">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div class="text pt-1">
                                    <p class="text-sm mb-1 text-capitalize">Saldo</p>
                                    <h4 class="mb-0">Rp. </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-3">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div class="text pt-1">
                                    <p class="text-sm mb-1 text-capitalize">Belum Terbayar</p>
                                    <h4 class="mb-0">Rp.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-3">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                
                                <div class="text pt-1">
                                    <p class="text-sm mb-1 text-capitalize">Terbayar</p>
                                    <h4 class="mb-0">Rp. </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-3">
                        <div class="card mb-2">
                            <div class="card-header p-3 pt-2">
                                <p class="text-sm mb-1 text-capitalize">Karyawan</p>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-3">
                                        <div class="mb-2">
                                            <div class="p-3 pt-2">
                                                <div class="text pt-1 text-lg-center" >
                                                    <h4 class="mb-3 fs-2">{{ $totalkaryawan }}</h4>
                                                    <p class="text-sm mb-1 text-capitalize ">Total Karyawan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-3">
                                        <div class="mb-2">
                                            <div class="p-3 pt-2" >
                                                <div class="text pt-1 text-lg-center" >
                                                    <h4 class="mb-3 fs-2">123</h4>
                                                    <p class="text-sm mb-1 text-capitalize ">Tergaji</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-3">
                                        <div class="mb-2">
                                            <div class="p-3 pt-2">
                                                <div class="text pt-1 text-lg-center">
                                                    <h4 class="mb-3 fs-2">123</h4>
                                                    <p class="text-sm mb-1 text-capitalize ">Terbayar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>       
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <div class="raw">
                    <nav class="bg-body-tertiary ">
                        <div class="container-fluid">
                            <form class="d-flex" role="search">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                          </div>
                    </nav>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive ">
                    <table class="table">
                    <thead class="table-light">
                    <tr>
                        <th scope="col">id Karyawan</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Divisi</th>
                        <th scope="col">Gaji</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($datakaryawan as $karyawans)
                    
                        <tr>
                            <td>{{ $karyawans->id_karyawan }}</td>
                            <td>{{ $karyawans->nama_karyawan }}</td>
                            <td>{{ $karyawans->jabatan }}</td>
                            <td>{{ $karyawans->divisi }}</td>
                            <td class=""> Rp.{{ $karyawans->gaji }}</td>
                        </tr>
                    
                    @endforeach
                    </tbody> 
                    </table>
                </div>
            </div>
            
        </div>
    </div>
    
@endsection