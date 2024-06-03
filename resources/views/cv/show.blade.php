@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>Job Application</span>  
                </div>
                <div class="card-body table-responsive">
                  

                    <table class="table table-bordered table-hover" id="slider_table">
                        <thead>
                            <tr> 
                                <th>Title </th>
                                <th>Value</th> 
                        </thead>
                        <tbody>
                            <tr> 
                                <td>Name</td>
                                <td>{{ $cv->name }}</td> 
                            </tr>
                            <tr> 
                                <td>Email</td>
                                <td>{{ $cv->email }}</td> 
                            </tr>
                            <tr> 
                                <td>Phone No</td>
                                <td>{{ $cv->phone }}</td> 
                            </tr>
                            <tr> 
                                <td>Cover Letter</td>
                                <td>{{ $cv->cover_letter }}</td> 
                            </tr>
                            <tr> 
                                <td>Download</td>
                                <td>
                                    <a href="{{ asset('storage/cvs/'.$cv->cv) }}" download>Download PDF</a>
                                </td> 
                            </tr>
                             
                        </tbody>
                    </table> 
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection
