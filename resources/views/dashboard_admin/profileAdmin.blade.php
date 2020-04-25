@extends('dashboard_admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
	  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12 col-md-offset-6" >
            <div class="box box-primary">
                <div class="container-fluid">
                <div class="row mb-2">
					<div class="col-sm-6">
						<h1>Profile Admin</h1>
					</div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                <li class="breadcrumb-item">
                                    <a href="/admin">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Profile Admin
                                </li>
                            </ol>
                        </div>			
			  	    </div>			
                </div>
            </div>
        </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="form-group">
                    <!-- <a class="btn-edit" style="margin-left:auto;" href="/editAdmin">
                       Edit profile
                    </a> -->
      @php $no = 1; @endphp
      @foreach($data as $d)
      <td>
				<a href="/changePassword" class="btn btn-outline-primary btn-sm" style="margin-left:auto; float:right">Change Password</a>   <br>    
			</td>
     
					<div class="form-group">
						<label for="">Nama Lengkap :</label>
						<input type="text" class="form-control" id="nama" name="nama" value="{{ $d->name }}" disabled>
					</div>

					<div class="form-group">
						<label for="">Email :</label>
						<input type="text" class="form-control" id="email" name="email" value="{{ $d->email }}" disabled>
					</div>

				@endforeach
				</form>
              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
</div>
</div>
    <!-- /.content-header -->
@endsection
