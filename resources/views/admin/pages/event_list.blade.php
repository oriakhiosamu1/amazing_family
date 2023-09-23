@extends('admin.layouts.master')

@section('content')
<div class="accordion" id="accordionExample">
    @forelse ($eventList as $event)
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                {{ $event->name }} || {{ $event->date }}
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>{{ $event->start_time }} || {{ $event->close_time }}</strong>{{ $event->description }}<code>{{ $event->venue }}</code>|<code><a href="event_form/{{$event->id}}/edit" class="link-primary">Edit</a></code>| <code><a onclick="return confirm('Are You Sure You Want To Delete?')" href="remove_event/{{ $event->id }}" class="link-danger">Delete</a></code>
            </div>
            </div>
        </div>
    @empty
        
    @endforelse

</div>
@endsection