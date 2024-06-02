<div>
<livewire:common.breadcrumb />
<section id="portfolio-section" class="bg-white">
            <div class="container">
                <div class="row">
                    <!-- Image -->
                    <div class="col-sm-6">
                        <p class="text-center"><img src="{{asset('/uploads/service_photos/'.$service->services_photo)}}" alt="Photo"
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
            </div><!-- /container -->
        </section>
</div>
