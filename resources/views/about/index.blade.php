@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>About Us</span>
                    <a class="btn btn-success" href="{{route('aboutedit')}}">Edit</a>
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
                                <th>Title </th>
                                <th>Value</th> 
                        </thead>
                        <tbody>
                            <tr> 
                                <td>About Image</td>
                                <td>
                                    <img id="image" src="{{ asset('uploads/about_photos/') }}/{{ @$about->image }}" alt="not found"  width="150px">
                                </td> 
                                
                            </tr>
                            <tr> 
                                <td>About Description</td>
                                <td>{!! $about->description !!}</td> 
                            </tr>
                            <tr> 
                                <td>Mission Image</td> 
                                <td>
                                    <img id="mission_image" src="{{ asset('uploads/about_photos/') }}/{{ @$about->mission_image }}" alt="not found"  width="150px">
                                </td> 
                            </tr>
                            <tr> 
                                <td>Mission Text</td>
                                <td>{{ $about->mission_text }}</td> 
                            </tr>
                            <tr> 
                                <td>Vission Image</td>
                                <td>
                                    <img id="vission_image" src="{{ asset('uploads/about_photos/') }}/{{ @$about->vission_image }}" alt="not found"  width="150px">
                                </td>  
                            </tr>
                            <tr> 
                                <td>Vission Text</td>
                                <td>{{ $about->vission_text }}</td> 
                            </tr>
                            <tr> 
                                <td>Values Image</td>
                                <td>
                                    <img id="values_image" src="{{ asset('uploads/about_photos/') }}/{{ @$about->values_image }}" alt="not found"  width="150px">
                                </td>   
                            </tr>
                            <tr> 
                                <td>Values Text</td>
                                <td>{{ $about->values_text }}</td> 
                            </tr> 
                        </tbody>
                    </table> 
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection
