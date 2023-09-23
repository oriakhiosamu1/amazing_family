@extends('admin.layouts.master')

@section('content')

     
<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
    <p><a href="{{ route('news_list') }}" class="link-primary">View All News</a></p>
    
    <div class="panel panel-info">

        <div class="panel-heading">
            Edit News Update!!!
        </div>

        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('news.update', ['news' => 
                $news->id ]) }}" enctype="multipart/form-data" >
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>News Headline</label>
                    <input class="form-control" name="headline" value="{{ $news->headline }}" type="text">
                    @error('headline')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>News Photo</label>
                    <input class="form-control" name="photo" value="{{ $news->photo }}" type="file">
                    @error('photo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>News Introduction</label>
                    <textarea class="form-control" name="intro" rows="5">{{ $news->intro }}</textarea>
                    @error('intro')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>News Body</label>
                    <textarea class="form-control" name="body" rows="5">{{ $news->body }}</textarea>
                    @error('body')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>News Conclusion</label>
                    <textarea class="form-control" name="conclusion" rows="5">{{ $news->conclusion }}</textarea>
                    @error('conclusion')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                  
                <button type="submit" class="btn btn-info">Edit And Change</button>

            </form>
        </div>

    </div>

</div>

@endsection