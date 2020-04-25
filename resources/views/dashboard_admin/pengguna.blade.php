@extends('dashboard_admin/base')
@section('content')
 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Data Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Lengkap</th>
                  <th>NIK</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1;
                @endphp
                @foreach($data as $d)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>
                    {{ $d->nama_depan }}
                    {{ $d->nama_belakang }}  
                  </td>
                  <td>{{ $d->nik }}</td>
                  <td>{{ $d->user->email }}</td>
                  <td class="d-flex">
                      <a href="{{route('pengguna.show', $d->id)}}" class=" btn btn-sm btn-primary mr-2">
                        <span>Lihat</span>
                      </a>
                      <form action="{{route('pengguna.destroy', $d->id)}}" method="post" class="destroy">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}   
                      <button type="submit" class=" btn btn-sm btn-danger mr-2">
                        Hapus
                      </button>
                      </form>             
                  </td>
                </tr>
                @endforeach
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
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
  @endsection
  @section('sweet')
  <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
  <!-- <script>
         $(document).ready( function () {
           $('#datakaryawan').DataTable();
           });
      </script> -->
  @endsection