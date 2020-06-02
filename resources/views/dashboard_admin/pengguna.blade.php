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
                  <th>Username</th>
                  <th>Email</th>
                  <th>Status</th>
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
                    {{ $d->name }}  
                  </td>
                  <td>{{ $d->email }}</td>
                  <td>
                    <div class="custom-control custom-switch">
                      <input id="customSwitch1" data-id="{{$d->id}}" class="custom-control-input" type="checkbox" {{ $d->status ? 'checked' : '' }}>
                      <label data-id="{{$d->id}}" class="custom-control-label" for="customSwitch1">
                    </div>
                  </td>
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

  $(function () {
    $('.custom-control-input').change(function(){
      alert('Are you sure change user status?');
      var user_id = $(this).data('id');
      console.log($(this));
      $.ajax({
        type: "POST",
        dataType: "json",
        url: "{{route('pengguna.index')}}/set-status/"+user_id,
        success: function(data){
          alert('successfully change user status');
        }
      });
    })
  });  
  </script>
  @endsection