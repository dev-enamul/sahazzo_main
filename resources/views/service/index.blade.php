@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Services</span>
                    <a href="{{route('service.create')}}" class="btn btn-success">Add Service</a>
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
                                <th>Title</th>
                                <th>Short Description</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($services as $service)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->short_description }}</td>
                                <td>
                                    <img width="80" height="60" src="{{ asset('uploads/service_photos') }}/{{ $service->services_photo }}" alt="not found">
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('admin/service/edit') }}/{{ $service->id }}" type="button" class="btn btn-primary">Edit</a>
                                        <a href="{{ url('admin/service/delete') }}/{{ $service->id }}" type="button" class="btn btn-danger">Delete</a>
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
    </div>
</div>

@endsection
