@extends('dashboard_admin/base')
@section('content')
 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Data Keluarga</a></li>
              <li class="breadcrumb-item active">Detail Keluarga</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            
            <!-- Profile Image -->

            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
              <div class="row">
                @foreach($data as $d)
                <div class="col-3">
                    <div class="card" style="width:250px">
                            <img class="card-img-top" src="/tema/images/keluarga.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                            <h4 class="card-title">{{ $d->name }}</h4>
                            <p class="card-text">{{ $d->email }}</p>
                            <a href="{{route('profilPengguna', $d->id)}}" class="btn btn-primary">Lihat Profil</a>
                            </div>
                        </div>
                </div>
                @endforeach
              </div>
                
              </div>
            </div>
            <!-- /.card -->

          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
@section('sweet')
@endsection