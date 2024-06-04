<div>
    <livewire:common.breadcrumb />
    <section class="bg-white" data-wow-duration="1200ms" data-wow-delay="100ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>About Us</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><img src="{{asset('uploads/about_photos/'.$about->image)}}" alt="Photo" class="mr20 mt5 mb20 float-left">{!!$about->description!!}</p>
                        
                    </div> 
                    <livewire:about.faq />
                </div>
            </div>
        </section> 
        <livewire:about.mission-vission :data="$about"/>
      
        <livewire:about.team />
        <livewire:about.counter />

</div>
