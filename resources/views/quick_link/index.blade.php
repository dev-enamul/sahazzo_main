@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Contact</span> 
                    <a href="{{ route('link.edit') }}" type="button" class="btn btn-primary">Edit</a>
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

                    <table class="table table-bordered table-hover" id="contact_table">
                        <thead>
                            <tr> 
                                <th>Title </th>
                                <th>Value</th> 
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Title</td>
                            <td>{{ @$quickLink->title }}</td>
                        </tr>
                        <tr>
                            <td>Subtitle</td>
                            <td>{{ @$quickLink->subtitle }}</td>
                        </tr>
                        <tr>
                            <td>Button Text</td>
                            <td>{{ @$quickLink->btn_text }}</td>
                        </tr>
                        <tr>
                            <td>Button Link</td>
                            <td><a href="{{ @$quickLink->btn_link }}" target="_blank">{{ @$quickLink->btn_link }}</a></td>
                        </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection
