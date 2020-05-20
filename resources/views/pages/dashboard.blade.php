@extends('layouts.default')
@section("title") Home Dashboard @endsection
@push('before-style')

@endpush
@push('after-style')

@endpush
<!-- Start Content -->
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"></small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Layout</a></li>
            <li class="breadcrumb-item active">Top Navigation</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  
  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              @if (session('error'))
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                {{ session('error') }}
              </div>
              @endif
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    
                    <img class="d-block w-100" src="http://smpn1samarinda.sch.id/media_library/image_sliders/5d4825b78bbf42ff2363767d52aebf5e.png" alt="First slide">
                    
                  </div>
                  
                  <div class="carousel-item">
                    
                    <img class="d-block w-100" src="http://smpn1samarinda.sch.id/media_library/image_sliders/d2c308f59a0c3fbfcd4ae414564192f4.jpg" alt="Second slide">
                    
                  </div>
                  
                  <div class="carousel-item">
                    
                    <img class="d-block w-100" src="http://smpn1samarinda.sch.id/media_library/image_sliders/38923ffd19be83834ef17c98567fa070.png" alt="Third slide">
                    
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-lg-4">
          <!-- Calendar -->
          <div class="card bg-gradient-success">
            <div class="card-body text-center">
              <!--The calendar -->
              <h1 class="card-title float-right">
                <strong>{{ $date }}</strong>
              </h1>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card card-primary">
            <div class="card-header">
              <h5 class="card-title m-0">Informasi Kelulusan</h5>
            </div>
            <div class="card-body">
              <p class="card-text"><strong>Silahkan ketik nomor Peserta UNBK </strong>
                <p><strong>Contoh : P160100010xxxx</strong> </p>
                <div class="form-group">
                  <form action="{{ route('graduates.search') }}">
                    <div class="input-group input-group-sm" >
                      <input type="text" name="term" required value="{{ old('term') }}" class="form-control float-right  @error('term') is-invalid @enderror" placeholder="Nomor Peserta Ujian">
                      
                      <div class="input-group-append">
                        {{--  <button type="submit"  class="btn btn-default"><i class="fas fa-search"></i></button>  --}}
                      </div>
                    </div>
                    @error('term')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                  </div>
                  
                  <button class="btn btn-primary" type="submit">Cari</button>
                </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4"></div>
          <div class="col-lg-4"></div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection
  @push('before-script')
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  @endpush
  @push('after-script')
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/assets/backend/adminlte30/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/assets/backend/adminlte30/dist/js/demo.js"></script>
  @endpush
  