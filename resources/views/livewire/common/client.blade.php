<section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Our Clients</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="slick-carousel" id="clients">
                            @foreach($clients as $client)
                            <div><a href="{{$client->weblink}}"><img src="{{asset('uploads/client_photos/'.$client->clients_photo)}}" alt="{{$client->name}}"></a></div> 
                            @endforeach
                        </div>
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </section>