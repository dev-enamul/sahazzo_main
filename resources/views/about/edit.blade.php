@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Update About
                </div>
                <div class="card-body"> 
                    <form method="post" action="{{ url('admin/about/edit') }}" enctype="multipart/form-data">
                        @csrf 
                        <div class="form-group">
                            <label>Description<span class="text-danger">*</span></label>
                            <textarea required class="form-control" name="description" rows="6">{{ @$about->description }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>About Photo<span class="text-danger">*</span></label>
                                    <input required type="file" class="form-control" name="new_image" onchange="document.getElementById('new_image').src = window.URL.createObjectURL(this.files[0]);"><br>  
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>About Photo<span class="text-danger">*</span></label><br>
                                    <img id="new_image" src="{{ asset('uploads/about_photos') }}/{{ @$about->image }}" alt="not found" width="100%">
                                </div>
                            </div>  
                        </div>

                        <hr>

                        <div class="form-group">
                            <label>Mission Text<span class="text-danger">*</span></label>
                            <textarea required class="form-control" name="mission_text" rows="6">{{ @$about->mission_text }}</textarea>
                            @error('mission_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Mission Image<span class="text-danger">*  [350 × 128 px]</span></label>
                                    <input required type="file" class="form-control" name="mission_image" onchange="document.getElementById('mission_image').src = window.URL.createObjectURL(this.files[0]);"><br>  
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Mission Photo</label><br>
                                    <img id="mission_image" src="{{ asset('uploads/about_photos') }}/{{ @$about->mission_image }}" alt="not found" width="100%">
                                </div> 
                            </div>
                        </div>
                        
                        <hr>

                        <div class="form-group">
                            <label>Vission Text<span class="text-danger">*</span></label>
                            <textarea required class="form-control" name="vission_text" rows="6">{{ @$about->vission_text }}</textarea>
                            @error('vission_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 

                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Vission Image<span class="text-danger">* [350 × 128 px]</span></label>
                                    <input required type="file" class="form-control" name="vission_image" onchange="document.getElementById('vission_image').src = window.URL.createObjectURL(this.files[0]);"><br>  
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Vission Photo<span class="text-danger">*</span></label><br>
                                    <img id="vission_image" src="{{ asset('uploads/about_photos') }}/{{ @$about->vission_image }}" alt="not found" width="100%">
                                </div> 
                            </div>
                        </div> 

                        <hr> 
                        <div class="form-group">
                            <label>Values Text<span class="text-danger">*</span></label>
                            <textarea required class="form-control" name="values_text" rows="6">{{ @$about->values_text }}</textarea>
                            @error('values_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>  

                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Values Image<span class="text-danger">* [350 × 128 px]</span></label>
                                    <input required type="file" class="form-control" name="values_image" onchange="document.getElementById('values_image').src = window.URL.createObjectURL(this.files[0]);"><br>  
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>About Photo<span class="text-danger">*</span></label><br>
                                    <img id="values_image" src="{{ asset('uploads/about_photos/') }}/{{ @$about->values_image }}" alt="not found"  width="100%">
                                </div> 
                            </div>
                        </div>  

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
