<section class="bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-r">
                            <h2>Our Management Team</h2>
                        </div>
                    </div>  
                    @foreach($teams as $team)
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <figure class="item-img-wrap">
                            <img src="{{asset('uploads/team_photos/'.$team->tm_photo)}}" class="img-fluid" alt="team">
                            <div class="item-img-overlay">
                                <div class="team-social">
                                    <p>
                                        <strong class="color4 text-uppercase">{{$team->name}}</strong><br>
                                        {{$team->designation}}
                                    </p>
                                </div>
                            </div>
                        </figure>
                        <div class="team-name">
                            <h4 class="h-underline2">{{$team->name}}</h4>
                            <h5>{{$team->designation}}</h5>
                            <ul class="list-inline socialstaff w-100 text-center p-0">
                                <li class="list-inline-item">
                                    <a href="{{$team->fb}}" data-toggle="tooltip" data-placement="bottom" data-original-title="Facebook" class="corp-tooltip">
                                        <i class="fa fa-facebook-square fa-2x"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{$team->twiter}}" data-toggle="tooltip" data-placement="bottom" data-original-title="Twitter" class="corp-tooltip">
                                        <i class="fa fa-twitter-square fa-2x"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{$team->linkedin}}" data-toggle="tooltip" data-placement="bottom" data-original-title="Linkedin" class="corp-tooltip">
                                        <i class="fa fa-linkedin-square fa-2x"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{$team->google}}" data-toggle="tooltip" data-placement="bottom" data-original-title="Email" class="corp-tooltip">
                                        <i class="fa fa-envelope-square fa-2x"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="visible-xs-block visible-sm-block pt20"></div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </section>