@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 m-auto">
        <div class="card">
                <div class="card-header">
                    Add Services
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
                    <form method="post" action="{{ route('serviceinsert') }}" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" required>
                            @error('heading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Short Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="short_description" required></textarea>
                            @error('short_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea rows="10" class="form-control" name="description" required></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Photo <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="services_photo" required>
                            @error('services_photo')
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
