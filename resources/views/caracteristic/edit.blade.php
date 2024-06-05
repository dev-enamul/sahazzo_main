@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-header">
                    Edit Client
                </div>
                <div class="card-body"> 
                    <form method="post" action="{{ url('admin/caracteristic/edit') }}/{{ $caracteristic->id }}">
                        @csrf
                        <div class="form-group">
                            <label>Icon [ <a target="blank" href="https://fontawesome.com/v4/icons/">Icon Link</a> ]</label>
                            <input type="text" class="form-control" value="{{$caracteristic->icon}}" name="icon" />
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" value="{{$caracteristic->title}}" name="title"/>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"  value="{{$caracteristic->description}}"  name="description"></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
