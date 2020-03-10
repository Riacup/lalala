@extends('dashboard_admin/base')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{route('pengguna.index')}}">
              <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
  
              <div class="info-box-content">
                  <span class="info-box-text text-dark">Akun</span>
                  <span class="info-box-number text-dark">{{ DB::table('users')->count()}}</span>
              </div>
              <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{route('keluarga.index')}}">
              <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
  
              <div class="info-box-content">
                  <span class="info-box-text text-dark">Keluarga</span>
                  <span class="info-box-number text-dark">{{ DB::table('kode_keluarga')->count()}}</span>
              </div>
              <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>
          <!-- /.col -->
  
          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
  
          <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-id-badge"></i></span>
  
              <div class="info-box-content">
                  <span class="info-box-text">Memori Personal</span>
                  <?php $sum = DB::table('album')->count() + DB::table('dokumen')->count() + DB::table('diari')->count();
                  ?>
                
                  <span class="info-box-number"> <?php echo $sum ?> </span>
                  
              </div>
              <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-photo-video"></i></span>
  
              <div class="info-box-content">
                  <span class="info-box-text">Memori Keluarga</span>
                  <?php $sum = DB::table('album')->count() + DB::table('dokumen')->count();
                  ?>
                
                  <span class="info-box-number"> <?php echo $sum ?> </span>
                  </div>
              <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
      <!-- /.col -->
      </div>
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Diagram Jumlah Pengguna</h3>
              </div><br>
              <div class="form-group d-flex col-md-3">
                <label for="exampleFormControlSelect1">Tahun</label> &nbsp
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>-- Pilih tahun --</option>
                  <option>2020</option>
                  <option>2021</option>
                  <option>2022</option>
                  <option>2023</option>
                </select>
              </div>
            </div>
            <div class="card-body">
              <div class="position-relative mb-4">
                <canvas id="pengguna" height="400"></canvas>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Diagram Jumlah Keluarga</h3>
              </div>
            </div>
            <div class="card-body">
              <div class="position-relative mb-4">
                <canvas id="keluarga" height="400"></canvas>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection