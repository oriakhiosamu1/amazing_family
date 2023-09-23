@extends('admin.layouts.master')

@section('content')
    
<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">

    <p><a href="{{ route('event_list') }}" class="link-primary">View All Events</a></p>
    <div class="panel panel-info">
        
        <div class="panel-heading">
            Edit Events Here!!!
        </div>

        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('event.update', ['event' => 
                $event->id ]) }}">

                @method('PUT')
                @csrf

                <div class="form-group">
                    <label>Event Name</label>
                    <input class="form-control" name="name" value="{{ $event->name }}" type="text">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="row">

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <label for="dateInput">Event Date</label>
                            <input class="form-control" name="date" value="{{ $event->date }}" type="date">
                            @error('date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <label for="timeInput">Event Start Time</label>
                            <input class="form-control" name="start_time" value="{{ $event->start_time }}" type="time">
                            @error('start_time')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <label for="timeInput">Event Close Time</label>
                            <input class="form-control" name="close_time" value="{{ $event->close_time }}" type="time">
                            @error('close_time')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                </div>

                <div class="form-group">
                    <label>Event Venue</label>
                    <input class="form-control" name="venue" value="{{ $event->venue }}" type="text">
                    @error('venue')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Event Description</label>
                    <textarea class="form-control" name="description" rows="5">{{ $event->description }}</textarea>
                    @error('description')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                  
                <button type="submit" class="btn btn-info"> Edit And Change</button>

            </form>
        </div>

    </div>

</div>

@endsection