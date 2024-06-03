@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Add Blog
        </div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <form method="post" action="{{ url('admin/blog/edit') }}/{{ $blog->id }}" enctype='multipart/form-data'>
                @csrf  
                <div class="form-group">
                    <label>Select Service <span class="text-danger">*</span></label>
                    <select class="form-control" name="service_id">
                        @foreach($services as $service)
                            <option {{$blog->service_id==$service->id?"selected":""}} value="{{$service->id}}" required>{{$service->title}}</option>
                        @endforeach
                    </select>
                    @error('service_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{$blog->title}}" required>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Short Text <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="short_description" required>{{$blog->short_description}}</textarea>
                    @error('short_text')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>  

                <div class="form-group">
                    <label>Description <span class="text-danger">*</span></label>
                    <textarea rows="10" class="form-control" name="description" required>{{$blog->description}}</textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Client Photo</label><br>
                    <img id="new_image" src="{{ asset('uploads/blog_photos') }}/{{ $blog->blog_photo }}" alt="not found" height="150" width="250">
                </div>

                
                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" class="form-control" name="blog_photo"  onchange="document.getElementById('new_image').src = window.URL.createObjectURL(this.files[0]);">
                
                </div> 
                <button type="submit" name="status" value="1" class="btn btn-success">Publish</button>
                <button type="submit" name="status" value="0" class="btn btn-primary">Save Draft</button>
            </form>
        </div>
    </div>
</div> 
@endsection
