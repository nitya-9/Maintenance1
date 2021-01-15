@extends('master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">

</section>

<!-- Main content -->
<section class="content">
    <div class="panel panel-warning">
        <div class="panel-heading"><h2>USERS</h2> @if ($role !=1)<h4>{{$deptname->department_name}}</h4>@endif<a href="/addUser">
            <button type="button" class="btn btn-info pull-right">Add New User</button></a><br><br>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="post" action="/searchUser">
                {{ csrf_field() }}
                <div class="row form-group">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Search Users" aria-label="Search Users" aria-describedby="basic-addon2" id="keyword" name="keyword"></div>
                      <div class="col-md-4">
                          <button class="btn btn-outline-secondary" type="submit">Search</button>
                      </div>
                  </div>
              </form>
              <table id="senarai" class="table table-hover table-striped">
                <thead>
                    @if(count($data)>0)
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>User ID</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Department</th>
                        <th></th>
                    </tr>
                    @else
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    @endif
                </thead>
                <tbody>
                    @foreach($data as $index => $d)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->userid}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->role}}</td>
                        <td>{{$d->department_name}}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="/viewUser/{{$d->id}}" data-toggle="tooltip" data-placement="top" title="View User"><span class="glyphicon glyphicon-search"></span></a>
                            <a class="btn btn-primary btn-sm" href="/editUser/{{$d->id}}" data-toggle="tooltip" data-placement="top" title="Edit User"><span class="glyphicon glyphicon-edit"></span></a>
                            <a class="btn btn-danger btn-sm" href="/deleteUser/{{$d->id}}" data-toggle="tooltip" data-placement="top" title="Delete User" onclick="return confirm('Confirm to delete?')" ><span class="glyphicon glyphicon-remove"></span></a>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section><!-- /.content -->
    @endsection
