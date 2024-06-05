<div>
<livewire:common.breadcrumb />
<section class="bg-white">
            <div class="container">
                <div id="content" class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Blog</h2>
                        </div>
                    </div>
                    <!-- SIDEBAR -->
                   
                    <livewire:blog.blogsidebar />

                    <!-- MAIN -->
                    <div id="main" class="col-md-8" role="main">
                        <!-- Article -->
                        <article>
                            <header>
                                <div class="post-thumbnail">
                                    <img src="{{asset('uploads/blog_photos/'.$blog->blog_photo)}}" alt="Post image">
                                </div>
                                <h2 class="entry-title">{{$blog->title}}</h2>
                                <p class="author">
                                        <i class="fa fa-calendar"></i>
                                        {{get_date($blog->updated_at)}}<span>/</span> BY <a href="#!"><strong>Admin</strong></a> <span>/</span> IN <a href="{{ url('service',$blog->service->slug) }}"><strong>{{$blog->service->title}}</strong></a></a>
                                    </p>
                            </header>
                            <div class="post_content">
                                <p>{!!$blog->short_description!!}</p> 
                                <p>{!!$blog->description!!}</p> 
                            </div> 
                        </article> 
                        <ul class="pagination mt10">
                            @if($prevSlug!=null)
                                <li class="page-item"><a  href="{{ url('blog-details',$prevSlug) }}" wire:navigate.hover class="page-link"><i class="fa fa-angle-left small"></i>&#xA0; Previous Blog</a></li>
                            @endif  

                            @if($nextSlug !=null)
                                <li class="page-item"><a href="{{ url('blog-details',$nextSlug) }}" wire:navigate.hover class="page-link">Next Blog &#xA0;<i class="fa fa-angle-right small"></i></a></li>
                            @endif
                        </ul>
                      
                    </div><!-- /main -->
                </div><!-- /row -->
            </div><!-- /container -->
        </section>
</div>
