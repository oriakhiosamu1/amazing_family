<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amazing Fire And Miracle Ministry</title>

    {{-- Bootstrap css starts --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    {{-- bootstrap css ends --}}

    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="{{ asset('assets/css/basic.css') }}" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>
<body>
    <div id="wrapper">
        {{-- navigation link goes here --}}
        @include('admin.partials.navigation')

        {{-- side bar goes here --}}
        @include('admin.partials.sidebar')

        {{-- inner body wrapper starts here --}}

        <div id="page-wrapper">
            <div id="page-inner">

                {{-- session message start --}}
                @if(session('message'))
                    <div class="alert alert-success alert-dismissible fade show my-4" role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- dashboard --}}
                @include('admin.partials.dashboard')


                {{-- zero issues starts here --}}

                {{-- slide bar goes here --}}


                {{-- notification panel goes here --}}

                <hr />

                {{-- users table starts here --}}
                @yield('content')

                <hr />

                {{-- compose support ticket goes here --}}

            </div>
            <!-- /. PAGE INNER, the white container -->
        </div>
        <!-- /. PAGE WRAPPER, the ashes/grey container  -->
    </div>

    {{-- footer goes here --}}
    @include('admin.partials.footer')

</body>
</html>
