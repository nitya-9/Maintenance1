@extends('master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
</section>

<!-- Main content -->
<section class="content">
  <div class="panel panel-info">
    <div class="panel-heading"><h3>Booking Form - {{ $data->roomName }}</h3>
    </div>
    <div class="panel-body">
      @if(session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
    @endif
      <form class="form-horizontal" role="form" method="post" onclick="return confirm('Confirm to Booking?')" action="/saveBooking">
        {{ csrf_field() }}
        <input type="hidden" name="roomId" value="{{ $data->id }}">

        <div class="col-md-12">
        <div class="col-md-6">
          <div class="form-group {{ $errors->has('dateBooking') ? ' has-error' : '' }}">
            <label for="dateEvent">Date Booking</label>
            <input id="dateBooking" type="date" class="form-control" name="dateBooking" value="{{ old('dateBooking')}}" autofocus>
            <small class="text-danger">{{ $errors->first('dateBooking') }}</small>
          </div>
        </div>
        </div>
        <div class="col-md-12">
        <div class="col-md-6">
          <div class="form-group {{ $errors->has('startTime') ? ' has-error' : '' }}">
            <label for="startTime">Start Time Event</label>
            <input id="startTime" type="time" class="form-control" name="startTime" value="{{ old('startTime')}}" autofocus>
            <small class="text-danger">{{ $errors->first('startTime') }}</small>
          </div>
        </div>
        </div>
        <div class="col-md-12">
        <div class="col-md-6">
          <div class="form-group {{ $errors->has('endTime') ? ' has-error' : '' }}">
            <label for="endTime">End Time Event</label>
            <input id="endTime" type="time" class="form-control" name="endTime" value="{{ old('endTime')}}" autofocus>
            <small class="text-danger">{{ $errors->first('endTime') }}</small>
          </div>
        </div>
        </div>
        <div class="col-md-12">
              <button type="submit" class="btn btn-primary">
                  {{ __('Submit') }}
              </button>
          <a href="/home" class="btn btn-info">Back</i></a>
        </div>
      </form>
    </div>
  </div>
</section><!-- /.content -->
@endsection
