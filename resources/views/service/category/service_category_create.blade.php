@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 m-auto">
        <div class="card">
                <div class="card-header">
                    Create Category
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
                    <form method="post" action="{{ route('service.category.store') }}" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" required>
                            @error('heading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>  
                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
