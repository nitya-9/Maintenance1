@extends('master')   
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">

</section>

<!-- Main content -->
<section class="content">
  <div class="panel panel-info">
    <div class="panel-heading"><h3>View User</h3>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" method="post" action="/saveUpdateUser">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" value="{{ $data->id }}">

        <div class="col-md-12">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">User ID</label>
              <input type="text" class="form-control" id="userid" name="userid" placeholder="Matrix No. or Staff ID" value="{{$data->userid}}" disabled="disabled">
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Designation</label>
              {!! Form::select('designation_id',$designation,$data->designation_id,['id' => 'designation_id','class' => 'form-control','disabled'=>'disabled'])!!}
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="{{$data->name}}" disabled="disabled">
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Email</label>
              <input type="text" class="form-control" id="email" name="email"  placeholder="Email" value="{{$data->email}}" disabled="disabled">
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Department</label>
              {!! Form::select('department_id',$department,$data->department_id,['id' => 'department_id','class' => 'form-control','disabled'=>'disabled'])!!}
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Role</label>
              {!! Form::select('role',$role,$data->role,['id' => 'role','class' => 'form-control','disabled'=>'disabled'])!!}
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <a href="/user" class="btn btn-info">Back</i></a>
        </div>
      </form>
    </div>
  </div>
</section><!-- /.content -->
@endsection