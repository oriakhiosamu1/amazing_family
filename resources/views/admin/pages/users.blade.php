@extends('admin.layouts.master')

@section('content')
    
    {{-- users table starts here --}}
    @include('admin.partials.users_table')
    @include('admin.partials.support_ticket')
@endsection