@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session('deletestatus'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('deletestatus') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif  

            @if (session('mssage'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('mssage') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif  
            <div class="card">
                <div class="card-header">
                    Contact Message
                </div> 

                <div class="card-body table-responsive"> 
                    <table class="table table-bordered table-hover" id="slider_table">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>   
                                <th>Action</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($messages as $message)
                            <tr class="{{$message->status==0?'table-primary':''}}">
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->phone }}</td> 
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('admin/contact-message/status/') }}/{{ $message->id }}" type="button" class="btn btn-primary">
                                            {{ $message->status==0?"Unmark":"Mark"}}
                                        </a>
                                        <a href="{{ url('admin/contact-message/delete/') }}/{{ $message->id }}" type="button" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-danger">No Data Available</td>
                                </tr>
                            @endforelse   
                        </tbody>
                    </table>
                    {{$messages->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection
