@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Team</span>
                    <a class="btn btn-success" href="{{route('team.create')}}">Create Team</a>
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
                                <th>Name</th>
                                <th>Designatione</th>
                                <th>Photo</th>
                                <th>Fb</th>
                                <th>Google</th>
                                <th>Linkedin</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($teams as $team)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ Str::limit($team->designation,20) }}</td>
                                <td>
                                    <img width="80" height="60" src="{{ asset('uploads/team_photos') }}/{{ $team->tm_photo }}" alt="not found">
                                </td>
                                <td>{{ Str::limit($team->fb,20) }}</td>
                                <td>{{ Str::limit($team->google,20) }}</td>
                                <td>{{ Str::limit($team->linkedin,20) }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('admin/team/edit') }}/{{ $team->id }}" type="button" class="btn btn-primary">Edit</a>
                                        <a href="{{ url('admin/team/delete') }}/{{ $team->id }}" type="button" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center text-danger">No Data Available</td>
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
