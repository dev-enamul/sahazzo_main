@push('title') 
    Our Projects | Explore Our Architectural Design Portfolio
 @endpush 

@push('description') 
    Explore a showcase of our architectural design projects at MARS Planning and Engineering. From residential homes to commercial complexes, dive into our diverse portfolio and discover the innovative solutions we've implemented. Get inspired for your next project with our successful endeavors.
@endpush

<div>
    <livewire:common.breadcrumb name="Project"/>
    <section id="portfolio-section" class="bg-white">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 text-center">
                <!-- PORTFOLIO INTRO TEXT -->
              
                <!-- PORTFOLIO NAV -->
                <ul class="portfolio-filters list-inline">
                    <li class="filter active list-inline-item" data-filter="all">All</li>
                    @foreach($categories as $category)
                        <li class="filter list-inline-item" data-filter="service_{{$category->id}}">{{$category->title}}</li> 
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12">
                <!-- PORTFOLIO GRID -->
                @foreach($projects as $project)
                    <div id="grid" class="row text-center">
                        <div class="col-sm-4 mix service_{{$project->service->category_id}}">
                            <a title="Project Title" href="{{url('project-details/')}}/{{$project->slug}}">
                                <div class="item-img-wrap">
                                    <img src="{{ asset('uploads/portfolio_photos') }}/{{ $project->portfolio_photo }}" class="img-fluid" alt="template">
                                    <div class="item-img-overlay">
                                        <div>
                                            <i class="fa fa-eye"></i>
                                            <h5>Project Title<br><small>{{$project->title}}</small></h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> 
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
</div> 
