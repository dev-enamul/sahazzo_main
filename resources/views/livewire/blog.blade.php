@push('title') 
    Tech Talk: Latest Trends and Tips from Shahazzo
 @endpush 

@push('description') 
Welcome to the Shahazzo Blog, where we share insights into the latest tech trends, web development tips, and digital marketing strategies. Stay updated with our expert analysis and practical advice.
@endpush

<div>
    <livewire:common.breadcrumb name="BLog"/>
    <section class="bg-white">
        <div class="container">
            <div id="content" class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Blog</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <!-- SIDEBAR --> 
                        <livewire:blog.blogsidebar />
                        <!-- MAIN -->
                        <div id="main" class="col-md-8" role="main">
                            @foreach($blogs as $blog)
                            <article>
                                <header>
                                    <div class="post-thumbnail">
                                        <img src="{{asset('uploads/blog_photos/'.$blog->blog_photo)}}" alt="Post image">
                                    </div>
                                    <h2 class="entry-title"><a  href="{{ url('blog-details',$blog->slug) }}" wire:navigate.hover>{{$blog->title}}</a></h2>
                                    <p class="author">
                                        <i class="fa fa-calendar"></i>
                                        {{get_date($blog->updated_at)}}<span>/</span> BY <a href="#!"><strong>Admin</strong></a> <span>/</span> IN <a href="{{ url('service',$blog->service->slug) }}"><strong>{{$blog->service->title}}</strong></a></a>
                                    </p>
                                </header>
                                <div class="post_content">
                                    <p>{{ \Illuminate\Support\Str::limit($blog->short_description, 450) }}</p>
                                    <a href="{{ url('blog-details',$blog->slug) }}" wire:navigate.hover class="btn btn-primary-corp"><i class="fa fa-plus"></i> READ MORE</a>
                                </div>
                            </article>
                            <hr>   
                            @endforeach
                            {{ $blogs->links('pagination::bootstrap-4') }}  
                        </div>
                    </div>
                </div>
            </div><!-- /row -->
        </div>
    </section>
</div>
