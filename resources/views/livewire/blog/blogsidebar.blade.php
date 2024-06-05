<aside class="col-md-4 sidebar sidebar-left"> 
    <!-- <div class="well widget">
        <form method="get">
            <div class="input-group search-form" role="form">
                <label class="sr-only" for="subscribe-email">Search...</label>
                <input type="text" class="form-control" name="s" id="search" value="" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
    </div> --> 
    <div class="well widget">
        <h2>Blog Categories</h2>
        <ul class="list-unstyled">
            @foreach($categoris as $category)
            <li><a href="{{url('/blog')}}?service={{$category->id}}" wire:navigate.hover>{{$category->title}} <span class="badge">{{@$category?->blogs?->count()}}</span></a>
            </li> 
            @endforeach
        </ul>
    </div>
    <!-- Recent posts -->
    <div class="well widget">
        <h2>Recent Post</h2>
        <ul class="list-unstyled">
            @foreach($recentBlogs as $latest)
                <li><a href="{{ url('blog-details',$latest->slug) }}" wire:navigate.hover>{{$latest->title}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
