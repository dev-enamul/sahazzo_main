@push('title') 
    {{$project->title}}
 @endpush 

@push('description') 
{{strip_tags($project->short_description)}}
@endpush

<div>
<livewire:common.breadcrumb name="Project"/>
<section id="portfolio-section" class="bg-white">
    <div class="container">
        <div class="row">
            <!-- Image -->
            <div class="col-sm-6">
                <p class="text-center">
                    <img src="{{ asset('uploads/portfolio_photos') }}/{{ $project->portfolio_photo }}" width="100%" alt="Photo"
                        class="img-fluid"></p> 
                <div class="visible-xs-block visible-sm-block pt20"></div>
            </div> 

            <div class="col-sm-6">
                <h4 class="color5 m0 text-uppercase wow fadeInLeft">{{$project->title}}</h4> 
                    {!!$project->short_description!!}
            </div>
        </div>
        <div class="row">
        {!!$project->description!!}
        </div>
    </div><!-- /container -->
</section>

<livewire:home.quick-link />

<section id="portfolio-section" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Gallery</h2>
                </div>
            </div> 
            <div class="col-md-12"> 
                <div id="grid" class="row text-center">
                    @foreach($galleris as $gallery)
                    <div class="col-sm-4 mix webdesign">
                        <a class="lightbox glightbox" data-type="image" data-draggable="true" title="Project Title" href="assets/img/port1.jpg">
                            <div class="item-img-wrap">
                                <img src="assets/img/port1.jpg" class="img-fluid" alt="template">
                                <div class="item-img-overlay">
                                    <div>
                                        <i class="fa fa-eye"></i>
                                        <h5>Project Title<br><small>HTML / CSS / JS</small></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>  
                    @endforeach

                </div><!-- /row -->
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</section>

</div>
