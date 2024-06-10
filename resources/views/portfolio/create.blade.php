@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
                <div class="card-header">
                    Add Portfolio
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
                    <form method="post" action="{{ route('portfolioinsert') }}" enctype='multipart/form-data'>
                        @csrf 

                        <div class="form-group">
                            <label>Select Service <span class="text-danger">*</span></label>
                            <select class="form-control" name="service_id">
                                @foreach($services as $service)
                                    <option value="{{$service->id}}" required>{{$service->title}}</option>
                                @endforeach
                            </select>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" required>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Short Text <span class="text-danger">*</span></label>
                           <textarea class="form-control" name="short_description" required></textarea>
                            @error('short_text')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>  

                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                           <textarea rows="10" class="form-control" name="description" required></textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>Photo <span class="text-danger">* [540 × 280 px]</span>  </label>
                            <input type="file" class="form-control" name="portfolio_photo" required>
                            @error('portfolio_photo')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
</div>

@endsection
