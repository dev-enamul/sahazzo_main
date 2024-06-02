@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-header">
                    Edit Testimonial
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

                    <form method="post" action="{{ url('testimonial/edit') }}/{{ $testimonial_info->id }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $testimonial_info->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" name="designation" value="{{ $testimonial_info->designation }}">
                            @error('designation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Comment</label>
                            <textarea class="form-control" name="comment" rows="6">{{ $testimonial_info->comment }}</textarea>
                            @error('comment')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 

                        <div class="form-group">
                            <label>New Photo</label>
                            <input type="file" class="form-control" name="new_image" onchange="document.getElementById('new_image').src = window.URL.createObjectURL(this.files[0]);"><br>
                        </div>

                        <div class="form-group">
                            <label>Photo</label><br>
                            <img id="new_image" src="{{ asset('uploads/testimonial_photos') }}/{{ $testimonial_info->testimonial_photo }}" alt="not found" height="150" width="250">
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
