<header>
    <div class="bg-img-fixed-content">
        <video loop muted autoplay poster="{{asset('website/assets/videos/videoframe.jpg')}}" class="bg-video">
            <!-- <source src="{{asset('website/assets/videos/corporate.webm')}}" type="video/webm"> -->
            <source src="{{ asset('uploads/slider_photos') }}/{{ @$slider->slider_photo }}" type="video/mp4">
        </video>
        <!-- HOME PROMO -->
        <section class="home-promo home-promo-video">
            <div class="text-center wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                <h2 class="titlepro">
                    <span class="upper">আপনি কি প্রস্তুত?</span>
                    
                    <span class="middle">
                        @php
                            $nameParts = explode(' ', config('app.name', 'Fallback Name'));
                            $lastWord = array_pop($nameParts);
                            $firstPart = implode(' ', $nameParts);
                        @endphp
                        {{ $firstPart }}
                        <strong>{{ $lastWord }}</strong>
                    </span>
                    <span class="bottom">{{$slider->slider_title}}</span>
                </h2>
                <a href="/contact" wire:navigate.hover class="btn btn-transparent slider_btn"> বিনামূল্যে পরামর্শ নিন </a>
            </div>
        </section>
    </div>
</header>