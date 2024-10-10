<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="footer-widget col-sm-12 col-md-12 col-lg-4 first">
                    <h3>About us</h3>
                    <p><a href="about.html">{{$contact->description}}</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker"></i> {{$contact->address}}</li>
                        <li class="number"><i class="fa fa-phone"></i> {{$contact->phone_no}}</li>
                        <li><i class="fa fa-envelope"></i> {{$contact->email}}</li> 
                    </ul>
                    <div class="visible-xs-block visible-sm-block pt20"></div>
                </div>
                <div class="footer-widget col-sm-6 col-md-6 col-lg-4">
                    <h3>Quick Link</h3>
                    <a href="{{ asset('website/assets/img/gall1.jpg') }}">
                        About Us
                    </a>
                    <br>
                    <a href="{{ asset('website/assets/img/gall1.jpg') }}">
                        Project
                    </a>
                    <br>
                    <a href="{{ asset('website/assets/img/gall1.jpg') }}">
                        Blog
                    </a>
                    <br>
                    <a href="{{ asset('website/assets/img/gall1.jpg') }}">
                        Career
                    </a>
                    <br>
                    <a href="{{ asset('website/assets/img/gall1.jpg') }}">
                        Contact
                    </a>
                     
                    <div class="visible-xs-block visible-sm-block pt20"></div>
                </div>
                <div class="footer-widget col-sm-6 col-md-6 col-lg-4">
                    <h3>Newsletter Registration</h3>
                    <ul class="list-inline social">
                        <li class="list-inline-item">
                            <a target="blank" href="{{$contact->fb}}">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a  target="blank" href="{{$contact->twitter}}">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a  target="blank" href="{{$contact->linkedin}}">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a target="blank" href="{{$contact->youtube}}">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li> 
                    </ul> 

                    <p class="mt-4">&#xA9; Marse Planing And Engineering. All Rights Reserved.</p>
                    <p class="small">
                        <i class="fa fa-angle-right"></i>
                        Developed by: <a href="#">Shahazzo Software</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!--WhatsApp Button-->
    <a target="blank" href="https://api.whatsapp.com/send?phone={{$contact->whatsapp}}&amp;text=hello" class="whatsappButton"
        id="whatsappButton"><i class="fa fa-whatsapp"></i></a>
    <!--back to top-->
    <a href="#" class="scrollToTop" id="scrollToTop"><i class="fa fa-angle-up"></i></a>
</footer>