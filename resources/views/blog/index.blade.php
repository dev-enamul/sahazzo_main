@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Blogs</span>
                    <div>
                        <form id="projectForm" method="GET" action="">
                            <select name="service_id" style="padding:6px 20px" id="serviceSelect" onchange="this.form.submit()">
                                @foreach($services as $service)
                                    <option value="{{$service->id}}" {{$selected==$service->id?"selected":""}}>{{$service->title}}</option>
                                @endforeach
                            </select>
                            <a class="btn btn-success" href="{{ route('blog.create') }}">Add Blog</a>
                        </form>
                    </div>
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
                                <th>Service</th>
                                <th>Title</th>
                                <th>Short Description</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($blogs as $blog)
                            <tr class="{{$blog->status==0?'table-warning':''}}">
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $blog->service->title }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($blog->short_description, 100) }}</td> 
                                <td> {{ \Illuminate\Support\Str::limit($blog->description, 200) }}</td>
                                <td>
                                    <img width="80" height="60" src="{{ asset('uploads/blog_photos') }}/{{ $blog->blog_photo }}" alt="not found">
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('admin/blog/edit') }}/{{ $blog->id }}" type="button" class="btn btn-primary">Edit</a>
                                        <a href="{{ url('admin/blog/delete') }}/{{ $blog->id }}" type="button" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-danger">No Data Available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection
