@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Counters
                </div>
                <div class="card-body table-responsive">
                    @if (session('success'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif 
                    <table class="table table-bordered table-hover" id="counter_table">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Value</th> 
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($counters as $counter)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $counter->icon }}</td>
                                <td>{{ $counter->title }}</td> 
                                <td>{{ $counter->value }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('counter.edit', $counter->id) }}" type="button" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('counter.delete', $counter->id) }}" type="button" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-danger">No Data Available</td>
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
                    Add Counter
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
                    <form method="post" action="{{ route('counter.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Icon <span class="text-danger">*</span> [ <a target="blank" href="https://fontawesome.com/v4/icons/">Icon Link</a> ]</label>
                            <input type="text" class="form-control" name="icon" required />
                            @error('icon')
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
                            <label>Value <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="value" required/>
                            @error('value')
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
