@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Gallery
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
                                <th>Project</th>
                                <th>Title</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($galleries as $gallery)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ @$gallery->project->title }}</td>
                                <td>{{ $gallery->title }}</td>
                                <td>
                                    <img width="80" height="60" src="{{ asset('uploads/gallery_photos') }}/{{ $gallery->gallery_photo }}" alt="not found">
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('admin/gallery/edit') }}/{{ $gallery->id }}" type="button" class="btn btn-primary">Edit</a>
                                        <a href="{{ url('admin/gallery/delete') }}/{{ $gallery->id }}" type="button" class="btn btn-danger">Delete</a>
                                    </div>
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
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Add Gallery
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
                    <form method="post" action="{{ route('gallery.store') }}" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group">
                            <label>Select Project</label>
                            <select name="project_id" class="form-control">
                                <option value="">General Photo</option>
                                @foreach($projects as $project)
                                    <option value="{{$project->id}}">{{$project->title}}</option>
                                @endforeach
                            </select>
                            @error('project_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 

                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" required/>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 

                        <div class="form-group">
                            <label>Photo <span class="text-danger">* [540*280 px]</span></label>
                            <input type="file" class="form-control" name="gallery_photo" required>
                            @error('gallery_photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
