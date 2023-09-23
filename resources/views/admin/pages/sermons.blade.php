@extends('admin.layouts.master')

@section('content')
    
<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
    <p><a href="{{ route('sermon_list') }}" class="link-primary">View All Sermons</a></p>
    <div class="panel panel-info">

        <div class="panel-heading">
            Create Sermons Here!!
        </div>

        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('create_sermons') }}" enctype="multipart/form-data" >
                @csrf

                <div class="form-group">
                    <label for="title">Sermon Title</label>
                    <input class="form-control" name="title" value="{{ old('title') }}" type="text">
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="photo">Sermon Photo</label>
                    <input class="form-control" name="photo" value="{{ old('photo') }}" type="file">
                    @error('photo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="row">

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <label for="date">Sermon Date</label>
                            <input class="form-control" name="date" value="{{ old('date') }}" type="date">
                            @error('date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <label for="speaker">Sermon Speaker</label>
                            <input class="form-control" name="speaker" value="{{ old('speaker') }}" type="text">
                            @error('speaker')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <label for="text">Sermon Text</label>
                            <input class="form-control" name="text" value="{{ old('text') }}" type="text">
                            @error('text')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                </div>

                <div class="form-group">
                    <label for="venue">Venue</label>
                    <input class="form-control" name="venue" value="{{ old('venue') }}" type="text">
                    @error('venue')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="into">Sermon Introduction</label>
                    <textarea class="form-control" name="intro" rows="5">{{ old('intro') }}</textarea>
                    @error('intro')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="body">Sermon Body</label>
                    <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                    @error('body')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="conclusion">Sermon Conclusion</label>
                    <textarea class="form-control" name="conclusion" rows="5">{{ old('conclusion') }}</textarea>
                    @error('conclusion')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                  
                <button type="submit" class="btn btn-info">Create Sermon</button>

            </form>
        </div>

    </div>

</div>

@endsection