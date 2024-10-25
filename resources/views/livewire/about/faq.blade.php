<div class="col-md-6"> 
        <div class="accordion mb-5" id="accordionExample"> 
            @foreach($faqs as $key => $faq)
            <div class="card">
                <div class="card-header" id="heading_{{$key}}">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                            data-target="#collapse_{{$key}}" aria-expanded="true" aria-controls="collapse_{{$key}}">
                            <b> {{$faq->question}}</b>
                        </button>
                    </h2>
                </div>
                <div id="collapse_{{$key}}" class="collapse {{$key==0?'show':''}}" aria-labelledby="heading_{{$key}}" data-parent="#accordionExample">
                    <div class="card-body">
                        {{$faq->answer}}
                    </div>
                </div>
            </div>  
            @endforeach

        </div>
    </div>