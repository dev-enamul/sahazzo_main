@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-header">
                    Faq Update
                </div>
                <div class="card-body"> 
                    <form method="post" action="{{ url('admin/faq/update') }}/{{ $faq->id }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Question <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="question" value="{{$faq->question}}" required />
                            @error('question')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 

                        <div class="form-group">
                            <label>Answer <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value = "{{$faq->answer}}" name="answer" required/>
                            @error('answer')
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
