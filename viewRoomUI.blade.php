@extends('master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">

</section>

<!-- Main content -->
<section class="content">
    <div class="panel panel-info">
        <div class="panel-heading"><h2>Lecture Room</h2>
          @if ($role == 1)
          <a href="/addProject"><button type="button" class="btn btn-info pull-right">Add New Room</button></a>
          @endif
        </div>
        <div class="panel-body">
            <div class="row form-group">
                <form class="form-horizontal" role="form" method="post" action="/searchProject">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Search Keywords" aria-label="Recipient's username" aria-describedby="basic-addon2" id="keyword" name="keyword"></div>
                      <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Search</button>
                      </div>
                  </form>
                  </div>
                  <table id="senarai" class="table table-hover table-striped table-border">
                    <thead>
                        @if(count($data)>0)
                        <tr>
                            <th>No.</th>
                            <th>Room</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        @else
                        <tr>
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
                            <td>{{$d->roomName}}</td>
                            <td>{{$d->status}}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="/bookingForm/{{$d->id}}" data-toggle="tooltip" data-placement="top" title="View Room">
                                  <span class="glyphicon glyphicon-search"></span></a>
                                  @if ($role == 1)
                                  <a class="btn btn-primary btn-sm" href="/editProject/{{$d->id}}" data-toggle="tooltip" data-placement="top" title="Edit Project"><span class="glyphicon glyphicon-edit"></span></a>
                                  @endif
                              </td>
                          </tr>
                          @endforeach

                      </tbody>
                  </table>
              </div>
          </div>
      </section><!-- /.content -->
      @endsection
