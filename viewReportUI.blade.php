@extends('master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">

</section>

<!-- Main content -->
<section class="content">
    <div class="panel panel-info">
        <div class="panel-heading"><h2>Report</h2>
          <!--
          <a href="/addProject"><button type="button" class="btn btn-info pull-right">Add New Room</button></a>
-->
        </div>
        <div class="panel-body">
            <div class="row form-group">

                  @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <form class="form-horizontal" role="form" method="post" action="/searchReport">
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
                            <th>Room Id</th>
                            <th>Date Booking</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Status</th>
                            <th>Name</th>
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
                            <td>{{$d->roomName}}</td>
                            <td>{{$d->dateBooking}}</td>
                            <td>{{$d->startTime}}</td>
                            <td>{{$d->endTime}}</td>
                            <td>@if($d->status == 1)
                                  Active
                                @endif
                                @if($d->status == 2)
                                  Cancelled
                                @endif
                        </td>
                            <td>{{$d->name}}
                              <input type="hidden" name="roomId" value="{{ $d->id }}">
                              </td>
                          </tr>
                          @endforeach

                      </tbody>
                  </table>
              </div>
          </div>
      </section><!-- /.content -->
      @endsection
