@extends('users.partials.master')

@section('content')



<div class="hero">
    <div class="slides">
        <li data-bg-image="{{ asset('images/slide-1.jpg') }}">
            <div class="container">
                <div class="slide-content">
                    <small class="slide-subtitle">Amazing Family</small>
                    <h2 class="slide-title">We're here to connect, support, and answer any questions you may have.</h2>

                    <a href="#" class="button">Join Us Today</a>
                </div>
            </div>
        </li>

        <li data-bg-image="{{ asset('images/slide-1.jpg') }}">
            <div class="container">
                <div class="slide-content">
                    <small class="slide-subtitle">Amazing Family</small>
                    <h2 class="slide-title">Your thoughts, inquiries, and prayers are all important to us.</h2>

                    <a href="#" class="button">Already A Family?</a>
                </div>
            </div>
        </li>
    </div>
</div>


    
@endsection