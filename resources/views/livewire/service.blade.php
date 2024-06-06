@push('title') 
{{$service->title}}
 @endpush 

@push('description') 
    {{strip_tags($service->short_description)}}
@endpush
<div>
<livewire:common.breadcrumb name="Service"/>
    <section id="portfolio-section" class="bg-white">
        <div class="container">
            <div class="row">
                <!-- Image -->
                <div class="col-sm-6">
                    <p class="text-center"><img src="{{asset('/uploads/service_photos/'.$service->services_photo)}}" width="100%" alt="Photo"
                            class="img-fluid"></p> 
                    <div class="visible-xs-block visible-sm-block pt20"></div>
                </div> 

                <div class="col-sm-6">
                    <h4 class="color5 m0 text-uppercase wow fadeInLeft">{{$service->title}}</h4> 
                        {!!$service->short_description!!}
                </div>
            </div>
            <div class="row">
            {!!$service->description!!}
            </div>
        </div>
    </section>
<livewire:home.quick-link />

<section id="portfolio-section" class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Recent Project</h2>
                        </div>
                    </div> 
                    <div class="col-md-12"> 
                    @foreach($projects as $project)
                                <div id="grid" class="row text-center">
                                    <div class="col-sm-4 mix service_{{$project->service_id}}">
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
                </div><!-- /row -->
            </div><!-- /container -->
        </section>

</div>
