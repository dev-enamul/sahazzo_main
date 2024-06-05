<section class="bg-gray" id="counterUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Some Facts</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row"> 
                            @foreach($counters as $counter)
                                <div class="col-sm-6 col-md-3 text-center">
                                    <figure class="home-icons">
                                        <i class="{{$counter->icon}} "></i>
                                    </figure>
                                    <h3 class="facts-title"><span class="count">{{$counter->value}}</span></h3>
                                    <h6 class="color4">{{$counter->title}}</h6>
                                </div>
                            @endforeach 
                        </div>
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </section>