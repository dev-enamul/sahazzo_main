@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Contact</span> 
                    <a href="{{ url('admin/contact/edit') }}/{{ $contact->id }}" type="button" class="btn btn-primary">Edit</a>
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
                            <tr> 
                                <td>Description</td>
                                <td>{{ $contact->description }}</td> 
                            </tr>
                            <tr> 
                                <td>Address</td>
                                <td>{{ $contact->address }}</td> 
                            </tr>
                            <tr> 
                                <td>Phone No</td>
                                <td>{{ $contact->phone_no }}</td> 
                            </tr>
                            <tr> 
                                <td>Google Map</td>
                                <td>{{ $contact->map }}</td> 
                            </tr>
                            <tr> 
                                <td>Email</td>
                                <td>{{ $contact->email }}</td> 
                            </tr>
                            <tr> 
                                <td>Twitter</td>
                                <td>{{ $contact->twitter }}</td> 
                            </tr>
                            <tr> 
                                <td>FB</td>
                                <td>{{ $contact->fb }}</td> 
                            </tr>
                            <tr> 
                                <td>Youtube</td>
                                <td>{{ $contact->youtube }}</td> 
                            </tr>
                            <tr> 
                                <td>Linkedin</td>
                                <td>{{ $contact->linkedin }}</td> 
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection
