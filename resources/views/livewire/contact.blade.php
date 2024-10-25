@push('title') 
    Get in Touch 
 @endpush 

@push('description') 
    Ready to embark on your digital journey? Connect with Shahazzo and experience the difference.
@endpush

<div >
<livewire:common.breadcrumb name="Contact Us"/>
<section class="bg-white">
    <div class="container">
        <div class="row wow fadeIn">
            <div class="col-md-12">
                <div class="title">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <!-- CONTACT INFO -->
            <div class="col-sm-12 col-md-5 cinfo">
                <div id="map-canvas">
                    {!!$contact->map!!}
                </div>
                <address>
                    <p><i class="fa fa-map-marker"></i>{{$contact->address}}</p>
                    <p><i class="fa fa-phone"></i>{{$contact->phone_no}}</p>
                    <p><i class="fa fa-envelope"></i>{{$contact->email}}</p> 
                </address>
                <div class="visible-xs-block visible-sm-block pt20"></div>
            </div><!-- /Contact Info -->
            <!-- CONTACT FORM -->
            <div class="col-sm-12 col-md-7">
                <livewire:contact-message />
            </div>
        </div>
    </div>
</section>
<div>
