<section class="bg-buy parallax">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="intro-text mt30 wow fadeInUp">
                    {!!$link->title!!}
                </h1>
                <p class="lead mt30">{!!$link->subtitle!!}</p>
                <p><a href="{{$link->btn_link}}"  wire:navigate.hover class="btn btn-primary-corp-big btn-secondary">{{$link->btn_text}}</a></p>
            </div>
        </div>
    </div>
</section>