@extends('admin.layouts.master')

@section('content')
<div class="accordion" id="accordionExample">

    @forelse ($news_list as $list)
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <a href="news/{{ $list->id }}" class="link-primary">{{ $list->headline }}</a>
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                {{ $list->intro }}<code><a href="news/{{ $list->id }}">Read more</a></code> <code><a    href="news_form/{{$list->id}}/edit" class="link-primary">Edit</a></code> <code><a onclick="return confirm('Are You Sure You Want To Delete?')" href="remove_news/{{ $list->id }}" class="link-danger">Delete</a></code>
            </div>
            </div>
        </div>
    @empty
        <p>No News Available</p>
    @endforelse

</div>
@endsection