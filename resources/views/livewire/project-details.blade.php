<div>
<livewire:common.breadcrumb />
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
                    </div><!-- /work col -->
                    <div class="col-sm-4 mix wordpress bootstrap">
                        <a class="lightbox glightbox" data-type="image" data-draggable="true" title="Project Title" href="assets/img/port2.jpg">
                            <div class="item-img-wrap">
                                <img src="assets/img/port2.jpg" class="img-fluid" alt="template">
                                <div class="item-img-overlay">
                                    <div>
                                        <i class="fa fa-eye"></i>
                                        <h5>Project Title<br><small>HTML / CSS / JS</small></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- /work col -->
                    <div class="col-sm-4 mix webdesign responsive">
                        <a class="lightbox glightbox" data-type="image" data-draggable="true" title="Project Title" href="assets/img/port3.jpg">
                            <div class="item-img-wrap">
                                <img src="assets/img/port3.jpg" class="img-fluid" alt="template">
                                <div class="item-img-overlay">
                                    <div>
                                        <i class="fa fa-eye"></i>
                                        <h5>Project Title<br><small>HTML / CSS / JS</small></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- /work col -->
                    <div class="col-sm-4 mix responsive bootstrap">
                        <a class="lightbox glightbox" data-type="image" data-draggable="true" title="Project Title" href="assets/img/port4.jpg">
                            <div class="item-img-wrap">
                                <img src="assets/img/port4.jpg" class="img-fluid" alt="template">
                                <div class="item-img-overlay">
                                    <div>
                                        <i class="fa fa-eye"></i>
                                        <h5>Project Title<br><small>HTML / CSS / JS</small></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- /work col -->
                        <div class="col-sm-4 mix wordpress webdesign">
                        <a class="lightbox glightbox" data-type="image" data-draggable="true" title="Project Title" href="assets/img/port5.jpg">
                            <div class="item-img-wrap">
                                <img src="assets/img/port5.jpg" class="img-fluid" alt="template">
                                <div class="item-img-overlay">
                                    <div>
                                        <i class="fa fa-eye"></i>
                                        <h5>Project Title<br><small>HTML / CSS / JS</small></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- /work col -->
                        <div class="col-sm-4 mix responsive bootstrap">
                            <a class="lightbox glightbox" data-type="image" data-draggable="true" title="Project Title" href="assets/img/port6.jpg">
                            <div class="item-img-wrap">
                                <img src="assets/img/port6.jpg" class="img-fluid" alt="template">
                                <div class="item-img-overlay">
                                    <div>
                                        <i class="fa fa-eye"></i>
                                        <h5>Project Title<br><small>HTML / CSS / JS</small></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- /work col -->
                        <div class="col-sm-4 mix webdesign wordpress">
                            <a class="lightbox glightbox" data-type="image" data-draggable="true" title="Project Title" href="assets/img/port7.jpg">
                            <div class="item-img-wrap">
                                <img src="assets/img/port7.jpg" class="img-fluid" alt="template">
                                <div class="item-img-overlay">
                                    <div>
                                        <i class="fa fa-eye"></i>
                                        <h5>Project Title<br><small>HTML / CSS / JS</small></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- /work col -->
                        <div class="col-sm-4 mix wordpress webdesign">
                        <a class="lightbox glightbox" data-type="image" data-draggable="true" title="Project Title" href="assets/img/port8.jpg">
                            <div class="item-img-wrap">
                                <img src="assets/img/port8.jpg" class="img-fluid" alt="template">
                                <div class="item-img-overlay">
                                    <div>
                                        <i class="fa fa-eye"></i>
                                        <h5>Project Title<br><small>HTML / CSS / JS</small></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- /work col -->
                        <div class="col-sm-4 mix responsive bootstrap">
                        <a class="lightbox glightbox" data-type="image" data-draggable="true" title="Project Title" href="assets/img/port9.jpg">
                            <div class="item-img-wrap">
                                <img src="assets/img/port9.jpg" class="img-fluid" alt="template">
                                <div class="item-img-overlay">
                                    <div>
                                        <i class="fa fa-eye"></i>
                                        <h5>Project Title<br><small>HTML / CSS / JS</small></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- /work col -->
                </div><!-- /row -->
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</section>

</div>
