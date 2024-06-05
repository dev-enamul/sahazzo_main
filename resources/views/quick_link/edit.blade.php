@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-header">
                    QuickLink Update
                </div>
                <div class="card-body"> 
                    <form method="post" action="{{ route('link.update') }}">
                        @csrf
                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{$quickLink->title}}" required />
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Subtitle <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="subtitle" value="{{$quickLink->subtitle}}" required />
                            @error('subtitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Button Text <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="btn_text" value="{{$quickLink->btn_text}}" required />
                            @error('btn_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Button Link <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="btn_link" value="{{$quickLink->btn_link}}" required />
                            @error('btn_link')
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
