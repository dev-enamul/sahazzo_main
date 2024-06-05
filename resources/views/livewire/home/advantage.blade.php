<section class="bg-white">
            <div class="container">
                <div class="row">
                    @foreach($caracteristics as $caracteristic)
                    <div class="col-sm-6 col-md-3 text-center home-icons">
                        <i class="{{$caracteristic->icon}} wow fadeInUp" data-wow-delay="20ms"></i>
                        <div>
                            <h4>{{$caracteristic->title}}</h4>
                            <h5>{{$caracteristic->description}}</h5>
                        </div>
                    </div> 
                    @endforeach
                </div>
            </div>
        </section>
