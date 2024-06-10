@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="card">
                <div class="card-header">
                    Edit Client
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

                    <form method="post" action="{{ url('admin/gallery/edit') }}/{{ $gallery->id }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Select Project</label>
                            <select name="project_id" class="form-control">
                                @foreach($projects as $project)
                                    <option {{$gallery->project_id==$project->id?"selected":""}} value="{{$project->id}}">{{$project->title}}</option>
                                @endforeach
                            </select>
                            @error('project_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 

                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{$gallery->title}}" required/>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>   
                        
                        <div class="form-group">
                            <label>Client Photo</label><br>
                            <img id="new_image" src="{{ asset('uploads/gallery_photos') }}/{{ $gallery->gallery_photo }}" alt="not found" height="150" width="250">
                        </div>

                        <div class="form-group">
                            <label>New Photo <span class="text-danger">[540*280 px]</span></label>
                            <input type="file" class="form-control" name="gallery_photo" onchange="document.getElementById('new_image').src = window.URL.createObjectURL(this.files[0]);"><br>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
