@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-header">
                    Edit Slider
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

                    <form method="post" action="{{ url('slider/edit') }}/{{ $slider_info->id }}" enctype="multipart/form-data">
                        @csrf 
                        <div class="form-group">
                            <input type="text" class="form-control" name="slider_title" id="" value="{{$slider_info->slider_title}}">
                        </div> 
                         
                        <div class="form-group">
                            <label>New Video</label> 
                            <input type="file" class="form-control" name="new_image" onchange="document.getElementById('new_image').src = window.URL.createObjectURL(this.files[0]);">
                        </div>   
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
