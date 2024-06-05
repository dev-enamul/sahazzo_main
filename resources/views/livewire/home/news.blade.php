<section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-r">
                            <h2>Latest Blogs</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="slick-carousel" id="news"> 
                            @foreach($news as $blog)
                            <div>
                                <article class="blognews">
                                    <a href="{{ url('blog-details',$blog->slug) }}" class="mt5 mb15">
                                        <div class="item-img-wrap">
                                            <img src="{{asset('uploads/blog_photos/'.$blog->blog_photo)}}" class="img-fluid" alt="template">
                                            <div class="item-img-overlay">
                                                <div class="news">
                                                    <span class="btn btn-transparent-sm"><i class="fa fa-plus"></i> Read more</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <h4><a href="{{ url('blog-details',$blog->slug) }}">{{$blog->title}}</a></h4>
                                    <p>{{ \Illuminate\Support\Str::limit($blog->short_description, 180) }}</p>
                                    <p class="author">
                                    <i class="fa fa-calendar"></i>
                                        {{get_date($blog->updated_at)}}<span>/</span> BY <a href="#!"><strong>Admin</strong></a>  </a>
                                        <a href="{{ url('blog-details',$blog->slug) }}" data-toggle="tooltip" data-placement="right" title data-original-title="Read more" class="corp-tooltip"><i class="fa fa-plus-square"></i></a>
                                    </p>
                                </article>
                            </div>

                            @endforeach
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>