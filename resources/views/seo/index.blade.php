@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Contact</span> 
                    <a href="{{ url('admin/seo/edit') }}" type="button" class="btn btn-primary">Edit</a>
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

                    <table class="table table-bordered table-hover" id="slider_table">
                        <thead>
                            <tr> 
                                <th>Title </th>
                                <th>Value</th> 
                        </thead>
                        <tbody>
                            @foreach($seos as $seo)
                            <tr> 
                                <td>{{$seo->key}}</td>
                                <td>{{ $seo->value }}</td> 
                            </tr> 
                            @endforeach
                        </tbody>
                    </table> 
                </div>
            </div>
        </div> 
    </div>
</div> 
@endsection
