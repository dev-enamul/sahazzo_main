@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="card">
                <div class="card-header">
                    Edit Contact
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

                    <form method="post" action="{{ url('admin/seo/edit') }}">
                        @csrf
                        <div class="form-group">
                            <label>Home Page Title</label>
                            <textarea class="form-control" name="description" rows="6">{{ $contact_info->description }}</textarea>

                            <label>Home Page Description</label>
                            <textarea class="form-control" name="description" rows="6">{{ $contact_info->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
