@extends('admin.layouts.master')

@section('content')
    
<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">

    <p><a href="{{ route('event_list') }}" class="link-primary">View All Events</a></p>
    <div class="panel panel-info">
        
        <div class="panel-heading">
            Register Upcoming Events Here!!
        </div>

        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('set_event') }}">
                @csrf

                <div class="form-group">
                    <label>Event Name</label>
                    <input class="form-control" name="name" value="{{ old('name') }}" type="text">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="row">

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <label for="dateInput">Event Date</label>
                            <input class="form-control" name="date" value="{{ old('date') }}" type="date">
                            @error('date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <label for="timeInput">Event Start Time</label>
                            <input class="form-control" name="start_time" value="{{ old('start_time') }}" type="time">
                            @error('start_time')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <label for="timeInput">Event Close Time</label>
                            <input class="form-control" name="close_time" value="{{ old('close_time') }}" type="time">
                            @error('close_time')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                </div>

                <div class="form-group">
                    <label>Event Venue</label>
                    <input class="form-control" name="venue" value="{{ old('venue') }}" type="text">
                    @error('venue')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Event Description</label>
                    <textarea class="form-control" name="description" rows="5">{{ old('description') }}</textarea>
                    @error('description')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                  
                <button type="submit" class="btn btn-info">Set Event</button>

            </form>
        </div>

    </div>

</div>

@endsection