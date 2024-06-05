@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <span> Slider </span>

                    <a href="{{ url('admin/slider/edit') }}/1" type="button" class="btn btn-primary">Edit</a>

                </div>
                <div class="card-body table-responsive">
                    @if (session('editstatus'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                {{ session('editstatus') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('deletestatus'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('deletestatus') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table class="table table-bordered table-hover" id="slider_table">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Slider Title</th>
                                <th>Slider Video</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sliders as $slider)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $slider->slider_title }}</td>
                                <td>
                                    <!-- <img width="80" height="60" src="{{ asset('uploads/slider_photos') }}/{{ $slider->slider_photo }}" alt="not found"> -->
                                    <a target="blank" href="{{ asset('uploads/slider_photos') }}/{{ $slider->slider_photo }}">Open Now</a>
                                </td> 
                            </tr>
                            @empty
                            <tr>
                               <td colspan="6" class="text-center text-danger">No Data Available</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Add Slider
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
                    <form method="post" action="{{ route('sliderinsert') }}" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group">
                            <label>Slider Title</label>
                            <input type="text" class="form-control" name="slider_title">
                            @error('slider_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 
                        
                        <div class="form-group">
                            <label>Slider Video <span class="text-danger">* 1280X720 PX</span></label>
                            <input type="file" class="form-control" name="slider_photo">
                            @error('slider_photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Add New Slider</button>
                    </form>
                </div>
            </div>
        </div> -->
    </div>
</div>

@endsection
