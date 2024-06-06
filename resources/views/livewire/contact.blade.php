@push('title') 
    Get in Touch 
 @endpush 

@push('description') 
    Have questions or inquiries? Contact MARS Planning and Engineering today. Our team is here to assist you with all your architectural design needs. Reach out to us for consultations, project inquiries, or any other information you require. We look forward to hearing from you!
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
