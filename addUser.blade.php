@extends('master')   
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
</section>

<!-- Main content -->
<section class="content">
  <div class="panel panel-info">
    <div class="panel-heading"><h2>Add New User</h2>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" method="post" action="/saveNewUser">
        {{ csrf_field() }}

        <div class="col-md-12">
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">User ID</label>
              <input type="text" class="form-control" id="userid" name="userid" placeholder="Matrix No. or Staff ID">
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleFormControlInput1">Designation</label>
              {!! Form::select('designation_id',$designation,['id' => 'designation_id','class' => 'form-control'])!!}
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
            </div>
          </div>

        </div>
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleFormControlInput1">Email</label>
              <input type="text" class="form-control" id="email" name="email"  placeholder="Email" >
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleFormControlInput1">Department</label>
              {!! Form::select('department_id',$department,['id' => 'department_id','class' => 'form-control'])!!}
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleFormControlInput1">Role</label>
              {!! Form::select('role',$role,['id' => 'role','class' => 'form-control'])!!}
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <a href="/user" class="btn btn-info">Back</i></a>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</section><!-- /.content -->
@endsection