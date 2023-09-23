@extends('admin.layouts.master')

@section('content')
<div class="accordion" id="accordionExample">

    <div class="accordion" id="accordionExample">
        @forelse ($sermons as $list)
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{ $list->title }}
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>{{ $list->speaker }} || {{ $list->text }}</strong>. {{ $list->intro }}<code><a href="sermons/{{ $list->id }}">Read More</a></code> <code><a href ="sermons_form/{{ $list->id }}/edit" class="link-primary">Edit</a></code> <code><a onclick="return confirm('Are You Sure You Want To Delete?')" href="remove_sermons/{{ $list->id }}" class="link-danger">Delete</a></code>
                </div>
                </div>
            </div>
        @empty
            
        @endforelse

    </div>

</div>
@endsection