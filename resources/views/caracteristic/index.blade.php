@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Characteristics
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
                    <table class="table table-bordered table-hover" id="caracteristic_table">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th> 
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($caracteristics as $caracteristic)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $caracteristic->icon }}</td>
                                <td>{{ $caracteristic->title }}</td> 
                                <td>{{ $caracteristic->description }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('caracteristic.edit', $caracteristic->id) }}" type="button" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('caracteristic.delete', $caracteristic->id) }}" type="button" class="btn btn-danger">Delete</a>
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
                    Add Characteristic
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
                    <form method="post" action="{{ route('caracteristic.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Icon [ <a target="blank" href="https://fontawesome.com/v4/icons/">Icon Link</a> ]</label>
                            <input type="text" class="form-control" name="icon" />
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title"/>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description"></textarea>
                            @error('description')
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
