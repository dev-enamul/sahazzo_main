@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Faq
                </div>
                <div class="card-body table-responsive">
                    @if (session('success'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif 
                    <table class="table table-bordered table-hover" id="slider_table">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Question</th>
                                <th>Answer</th> 
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($faqs as $faq)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $faq->question }}</td>
                                <td>{{ $faq->answer }}</td> 
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('admin/faq/edit') }}/{{ $faq->id }}" type="button" class="btn btn-primary">Edit</a>
                                        <a href="{{ url('admin/faq/delete') }}/{{ $faq->id }}" type="button" class="btn btn-danger">Delete</a>
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
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Add Clients
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <form method="post" action="{{ route('faq.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Question <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="question" required />
                            @error('question')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 

                        <div class="form-group">
                            <label>Answer <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="answer" required/>
                            @error('answer')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>  

                        <button type="submit" class="btn btn-success">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
