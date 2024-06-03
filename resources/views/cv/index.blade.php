@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        @if (session('deletestatus'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('deletestatus') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif 

            <div class="card">
                <div class="card-header">
                    Gallery
                </div>
                <div class="card-body table-responsive"> 
                    <table class="table table-bordered table-hover" id="slider_table">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>  
                                <th>CV</th>
                                <th>Action</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cvs as $cv)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $cv->name }}</td>
                                <td>{{ $cv->email }}</td>
                                <td>{{ $cv->phone }}</td>
                                <td>
                                    <a href="{{ asset('storage/cvs/'.$cv->cv) }}" download>Download PDF</a>
                                </td>
                                 
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('admin/cv/show') }}/{{ $cv->id }}" type="button" class="btn btn-primary">View Details</a>
                                        <a href="{{ url('admin/cv/delete') }}/{{ $cv->id }}" type="button" class="btn btn-danger">Delete</a>
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
