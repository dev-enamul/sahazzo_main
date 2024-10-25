<section class="bg-gray">
    <div class="container">
        <div class="row"> 
            <div class="col-md-4">
                <p><br><img src="{{asset('uploads/about_photos/'.$data->mission_image)}}" alt="Mission" class="mb15 img-fluid"></p>
                <h3 class="color5 wow fadeInUp">মিশন</h3>
                <p>{{$data->mission_text}}</p>
            </div> 
            <div class="col-md-4">
                <p><br><img src="{{asset('uploads/about_photos/'.$data->vission_image)}}" alt="Vision" class="mb15 img-fluid"></p>
                <h3 class="color5 wow fadeInUp">ভিশন </h3>
                <p>{{$data->vission_text}}</p>
            </div> 
            <div class="col-md-4">
                <p><br><img src="{{asset('uploads/about_photos/'.$data->values_image)}}" alt="Values" class="mb15 img-fluid"></p>
                <h3 class="color5 wow fadeInUp">মূল্যবোধ</h3>
                <p>{{$data->values_text}}</p>
            </div>
        </div>
    </div>
</section>