@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Projects</span>
                    <div>
                        <form id="projectForm" method="GET" action="">
                            <select name="service_id" id="serviceSelect" onchange="this.form.submit()">
                                @foreach($services as $service)
                                    <option value="{{$service->id}}" {{$selected==$service->id?"selected":""}}>{{$service->title}}</option>
                                @endforeach
                            </select>
                            <a class="btn btn-success" href="{{ route('portfolio.create') }}">Add Project</a>
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
                                <th>Title</th>
                                <th>Service</th>
                                <th>Short Text</th> 
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($portfolios as $portfolio)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $portfolio->title }}</td>
                                <td>{{ @$portfolio->service->title }}</td>
                                <td>{{ $portfolio->short_description }}</td> 
                                <td>
                                    <img width="80" height="60" src="{{ asset('uploads/portfolio_photos') }}/{{ $portfolio->portfolio_photo }}" alt="not found">
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('admin/portfolio/edit') }}/{{ $portfolio->id }}" type="button" class="btn btn-primary">Edit</a>
                                        <a href="{{ url('admin/portfolio/delete') }}/{{ $portfolio->id }}" type="button" class="btn btn-danger">Delete</a>
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
