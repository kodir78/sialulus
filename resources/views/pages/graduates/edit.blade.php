@extends('layouts.default')
@push('after-style')
@endpush
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                src="/assets/backend/adminlte30/dist/img/nophoto.png"
                                alt="User profile picture">
                            </div>
                            
                            <h3 class="profile-username text-center">{{ $item->name }}</h3>
                            <h1 class="profile-username text-center">{{ $item->ket }}</h1>
                            <p class="text-muted text-center"></p>
                            
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Kelas</b> <a class="float-right">{{ $item->kls }}</a> 
                                </li>
                                <li class="list-group-item">
                                    <b>NIS</b> <a class="float-right">{{ $item->nis }}</a> 
                                </li>
                                <li class="list-group-item">
                                    <b>NISN</b> <a class="float-right">{{ $item->nisn }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>No UBK</b> <a class="float-right">{{ $item->nopesubk }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>No US</b> <a class="float-right">{{ $item->nopes_skl }}</a>
                                </li>
                                <li class="list-group-item">
                                    Orang Tua/Wali <a class="float-right">{{ $item->name_ortu }}</a>
                                </li>
                            </ul>
                            
                            {{--  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>  --}}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    
                    <!-- About Me Box -->
                    {{--  <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>
                            
                            <p class="text-muted">
                                B.S. in Computer Science from the University of Tennessee at Knoxville
                            </p>
                            
                            <hr>
                            
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                            
                            <p class="text-muted">Malibu, California</p>
                            
                            <hr>
                            
                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                            
                            <p class="text-muted">
                                <span class="tag tag-danger">UI Design</span>
                                <span class="tag tag-success">Coding</span>
                                <span class="tag tag-info">Javascript</span>
                                <span class="tag tag-warning">PHP</span>
                                <span class="tag tag-primary">Node.js</span>
                            </p>
                            
                            <hr>
                            
                            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                            
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                        </div>
                        <!-- /.card-body -->
                    </div>  --}}
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header text-center">
                            <h1>DAFTAR NILAI</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="text-center">                  
                                    <tr>
                                        <th style="width: 10px">No</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Nilai Rerata Raport</th>
                                        <th>Nilai Ujian Sekolah</th>
                                        <th>Nilai Akhir Sekolah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-right">1</td>
                                        <td>Pendidikan Agama dan Budi Pekerti</td>
                                        <td class="text-center">{{ $item->r_agama }}</td>
                                        <td class="text-center">{{ $item->nus_agama }}</td>
                                        <td class="text-center">{{ $item->nas_agama }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">2</td>
                                        <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                                        <td class="text-center">{{ $item->r_pkn }}</td>
                                        <td class="text-center">{{ $item->nus_pkn }}</td>
                                        <td class="text-center">{{ $item->nas_pkn }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">3</td>
                                        <td>Bahasa Indonesia</td>
                                        <td class="text-center">{{ $item->r_bind }}</td>
                                        <td class="text-center">{{ $item->nus_bind }}</td>
                                        <td class="text-center">{{ $item->nas_bind }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">4</td>
                                        <td>Bahasa Inggris</td>
                                        <td class="text-center">{{ $item->r_bing }}</td>
                                        <td class="text-center">{{ $item->nus_bing }}</td>
                                        <td class="text-center">{{ $item->nas_bing }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">5</td>
                                        <td>Matematika</td>
                                        <td class="text-center">{{ $item->r_mat }}</td>
                                        <td class="text-center">{{ $item->nus_mat }}</td>
                                        <td class="text-center">{{ $item->nas_mat }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">6</td>
                                        <td>Ilmu Pengetahuan Alam</td>
                                        <td class="text-center">{{ $item->r_ipa }}</td>
                                        <td class="text-center">{{ $item->nus_ipa }}</td>
                                        <td class="text-center">{{ $item->nas_ipa }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">7</td>
                                        <td>Ilmu Pengetahuan Sosial</td>
                                        <td class="text-center">{{ $item->r_ips }}</td>
                                        <td class="text-center">{{ $item->nus_ips }}</td>
                                        <td class="text-center">{{ $item->nas_ips }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">8</td>
                                        <td>Seni Budaya</td>
                                        <td class="text-center">{{ $item->r_seni }}</td>
                                        <td class="text-center">{{ $item->nus_seni }}</td>
                                        <td class="text-center">{{ $item->nas_seni }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">9</td>
                                        <td>Pendidikan Jasmani, Olah Raga & Kesehatan</td>
                                        <td class="text-center">{{ $item->r_penjas }}</td>
                                        <td class="text-center">{{ $item->nus_penjas }}</td>
                                        <td class="text-center">{{ $item->nas_penjas }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">10</td>
                                        <td>Prakarya</td>
                                        <td class="text-center">{{ $item->r_pra }}</td>
                                        <td class="text-center">{{ $item->nus_pra }}</td>
                                        <td class="text-center">{{ $item->nas_pra }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">11</td>
                                        <td>Muatan Lokal</td>
                                        <td class="text-center">-</td>
                                        <td class="text-center">-</td>
                                        <td class="text-center">-</td>
                                    </tr>
                                    <tr class="font-weight-bold">
                                        <td colspan="2" class="text-center">Jumlah</td>
                                        <td class="text-center">{{ $item->r_jumlah }}</td>
                                        <td class="text-center">{{ $item->nus_jumlah }}</td>
                                        <td class="text-center">{{ $item->nas_jumlah }}</td>
                                    </tr>
                                    <tr class="font-weight-bold">
                                        <td colspan="2" class="text-center">Rata-Rata</td>
                                        <td class="text-center">{{ $item->r_rata }}</td>
                                        <td class="text-center">{{ $item->nus_rata }}</td>
                                        <td class="text-center">{{ number_format($item->nas_rata,1) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@push('after-script')
@endpush