@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="card">
                <div class="card-header">
                    Edit Project
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

                    <form method="post" action="{{ url('admin/portfolio/edit') }}/{{ $portfolio_info->id }}" enctype="multipart/form-data">
                        @csrf 

                        <div class="form-group">
                            <label>Select Service <span class="text-danger">*</span></label>
                            <select class="form-control" name="service_id">
                                @foreach($services as $service)
                                    <option {{$portfolio_info->service_id==$service->id?"selected":""}} value="{{$service->id}}" required>{{$service->title}}</option>
                                @endforeach
                            </select>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $portfolio_info->title }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Short Description</label>
                            <input type="text" class="form-control" name="short_description" value="{{ $portfolio_info->short_description }}">
                            @error('short_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>  

                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                           <textarea rows="10" class="form-control" name="description" required>{{ $portfolio_info->description }}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>New Photo</label><br>
                            <img id="new_image" src="{{ asset('uploads/portfolio_photos') }}/{{ $portfolio_info->portfolio_photo }}" alt="not found" height="150" width="250">
                        </div>

                        <div class="form-group">
                            <label>New Photo <span class="text-danger">[540 × 281 px]</span></label>
                            <input type="file" class="form-control" name="new_image" onchange="document.getElementById('new_image').src = window.URL.createObjectURL(this.files[0]);"><br>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
