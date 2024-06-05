@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-header">
                    Counter Update
                </div>
                <div class="card-body"> 
                    <form method="post" action="{{ url('admin/faq/update') }}/{{ $counter->id }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Icon <span class="text-danger">*</span> [ <a target="blank" href="https://fontawesome.com/v4/icons/">Icon Link</a> ]</label>
                            <input type="text" class="form-control" name="icon" value="{{$counter->icon}}" required />
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 

                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{$counter->title}}" name="title" required/>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Value <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{$counter->value}}" name="value" required/>
                            @error('value')
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
