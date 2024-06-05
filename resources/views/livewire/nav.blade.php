<nav class="navbar navbar-expand-lg position-fixed navbar-fixed-top navbar-default w-100"> 
    <div class="container">
        <!-- Change your logo here -->
        <a class="navbar-brand" href="/"><img src="{{asset('uploads/about_photos/'.$logo)}}" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a href="/" wire:navigate.hover>Home</a>
                </li>
                <li class="{{ request()->is('about-us') ? 'active' : '' }}">
                    <a href="/about-us" wire:navigate.hover>About Us</a>
                </li> 
                <li class="dropdown {{ request()->is('service') ? 'active' : '' }}">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">Service <i
                            class="fa fa-angle-down small"></i></a>
                    <ul class="dropdown-menu">
                        @foreach ($services as $service)
                            <li>
                                <a href="{{ url('service',$service->slug) }}" wire:navigate.hover>{{ $service->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>  
                <li><a href="/project" wire:navigate.hover>Project</a></li> 
                <li><a href="/blog" wire:navigate.hover>Blog</a></li>
                <li class="{{ request()->is('career') ? 'active' : '' }}"><a href="/career" wire:navigate.hover>Career</a></li> 
                <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="/contact" wire:navigate.hover>Contact</a></li>  
            </ul>
        </div>
    </div>
</nav> 