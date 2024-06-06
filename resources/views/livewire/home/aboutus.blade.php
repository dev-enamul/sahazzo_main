 
<section class="bg-gray" data-wow-duration="1200ms" data-wow-delay="100ms">
    <div class="container">
        <div class="row"> 
            <div class="col-md-6">
                <p><img src="{{asset('uploads/about_photos/'.$about->image)}}" alt="Photo" class="mr20 mt5 mb20 float-left"> {!!$about->description!!} </p>
            </div> 
            <livewire:about.faq />
        </div>
    </div>
</section> 