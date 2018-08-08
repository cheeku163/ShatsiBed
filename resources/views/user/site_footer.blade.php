<!-- Footer -->
<footer class="footer footer-widgets">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget widget_text widget_info">
                    <h5 class="widget-title">SHATSIBED</h5>
                    <div class="textwidget">
                        <p>Get Affordable accommodation and Enjoy public fun experiences from great hosts around the world.</p>
                    </div><!-- /.textwidget -->
                    <ul class="flat-infomation">
                        <li><i class="fa fa-map-marker"></i>Kigunga Hillside Seeta, Mukono-Uganda</li>
                        <li><i class="fa fa-phone"></i>+256-775745803</li>
                    </ul>
                </div><!-- /.widget -->
            </div><!-- /.col-lg-3 -->

            <div class="col-lg-3">
                <div id="nav_menu-2" class="widget widget_nav_menu">
                    <h5 class="widget-title">SITE MAP</h5>
                    <div class="wrap-menufooter clearfix">
                        <ul class="menu one-half">
                            <li class="menu-item"><a href="/">Home</a></li>
                            <li class="menu-item"><a href="{{route('user.about')}}">About Us</a></li>
                            <li class="menu-item"><a href="{{route('user.termsofUse')}}">Terms of Use</a></li>
                            <li class="menu-item"><a href="{{route('user.privacy')}}">Privacy Policy</a></li>
                            <li class="menu-item"><a href="{{route('user.faq')}}">FAQs</a></li>
                            <li class="menu-item"><a href="#">Experiences</a></li>

                        </ul>
                    </div>
                </div>
            </div><!-- /.col-lg-3 -->

            <div class="col-lg-3">
                <div class="widget widget_listing">
                    <h5 class="widget-title">POPULAR HOMES</h5>
                    <ul>
                        @foreach(App\Company::orderBy('views', 'DESC')->take(2)->get() as $featured)
                        <li>
                            <div class="featured">
                                <a href="#" class="effect">
                                    <img src="/images/services/latest_reviews_50x50/{{$featured->image}}" alt="image">
                                </a>
                            </div>
                            <div class="info-listing">
                                <h6><a href="/{{$featured->slug}}" >{{$featured->name}}</a></h6>
                                <div class="start-review">
                                    <span class="flat-start">
                                            @for ($k=1; $k <= 5 ; $k++)
                                            <span data-title="Average Rate: 5 / 5" class="bottom-ratings tip">
                                                <span class="glyphicon glyphicon-star{{ ($k <= $featured->rating) ? '' : '-empty'}}"></span>
                                            </span>
                                        @endfor
                                        </span>
                                    <a href="#" class="review">( {{$featured->rating}} rating )</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div><!-- /.col-lg-3 -->

            <div class="col-lg-3">
                <div class="widget widget_contact">
                    <h5 class="widget-title">LATEST TWITTER FEEDS</h5>
                    <ul class="clearfix">
                        <li>
                            <div class="thumb">
                                <a href="#" class="effect">
                                    <img src="images/flickr/1.jpg" alt="image">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="#" class="effect">
                                    <img src="images/flickr/2.jpg" alt="image">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="#" class="effect">
                                    <img src="images/flickr/5.jpg" alt="image">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="#" class="effect">
                                    <img src="images/flickr/6.jpg" alt="image">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="container">
        <div class="bottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>© 2018.ShatsiBed.All Rights Reserved.
                        </p>
                    </div>
                </div><!-- /.col-md-12 -->
                <div class="col-lg-6">
                    <div class="social-links float-right">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade flat-popupform" id="popup_login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center clearfix">
                <form class="form-login form-listing" action="{{route('user.login.submit')}}" method="post">
                    {{ csrf_field() }}
                    <h3 class="title-formlogin">Log in</h3>
                    <span class="input-login icon-form">
                        <input type="text" placeholder="Email Address" name="email" required="required">
                        <i class="fa fa-user"></i>
                    </span>
                    <span class="input-login icon-form">
                        <input type="text" placeholder="Password*" name="password" required="required">
                        <i class="fa fa-lock"></i>
                    </span>
                    <div class="flat-fogot clearfix">
                        <label class="float-left">
                            <span class="input-check">
                                <input type="checkbox" id="rem" name="check" value="0" checked="">
                                <label for="rem" class="remember">Remember me</label>
                            </span>
                        </label>
                        <label class="float-right link-register">
                            <a href="#">Lost your password?</a>
                        </label>
                    </div>
                    <span class="wrap-button">
                        <button type="submit" id="login-button" class="login-btn effect-button" title="log in">LOG IN</button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade flat-popupform" id="popup_register">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center clearfix">
                <form class="form-login form-listing" action="{{route('user.submit')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3 class="title-formlogin">Sign Up</h3>
                    <span class="input-login icon-form">
                        <input type="text" placeholder="Your Name*" name="name" required="required">
                        <i class="fa fa-user"></i></span>
                    <span class="input-login icon-form">
                        <input type="text" placeholder="E-mail*" name="email" required="required">
                        <i class="fa fa-envelope-o"></i></span>
                    <span class="input-login icon-form">
                        <input type="text" placeholder="Phone Contact" name="phone" required="required">
                        <i class="fa fa-phone"></i></span>
                    <span class="input-login icon-form">
                        <input type="text" placeholder="Address" name="address" required="required">
                        <i class="fa fa-map-marker"></i></span>
                    <span class="input-login icon-form">
                        <input type="text" placeholder="Password*" name="password" required="required">
                        <i class="fa fa-lock"></i></span>

                    <div class="form-group ">
                        <div class="col-md-3">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                     style="width: 200px; height: 150px;">
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
                                </div>
                                <div>
                                    <span class="btn btn-default btn-file">
										<span class="fileinput-new">Select profile image </span>
											<span class="fileinput-exists">Change </span>
                                        <input type="file" name="photo"></span>
                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">
                                        Remove </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-button signup">
                        <button type="submit" id="logup-button" class=" login-btn effect-button" title="log in">REGISTER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="booking-popup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center clearfix">
                <form method="post" action="{{route('submit.request')}}">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        @if(Auth::guard('user')->user() )
                            <h4 class="modal-title">Book this Home</h4>
                            <input name="type" value="1" type="hidden"/>
                        @else
                            <h4 class="modal-title">Request this Home</h4>
                            <input name="type" value="2" type="hidden"/>
                        @endif
                    </div>
                    <div class="modal-body col-md-12">
                        @if(!Auth::guard('user')->user() )
                            <div class="form-group">
                                <div class="input-icon">
                                    <input name="name" class="form-control"
                                           placeholder="Your Full Name" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input name="contact" class="form-control"
                                           placeholder="Your Contact" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input name="email" class="form-control"
                                           placeholder="Your Email Address" type="text" required/>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <div class="input-icon">
                                <input name="age" class="form-control"
                                       placeholder="How old are you?" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <select name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <input name="guests" class="form-control"
                                       placeholder="Number of Guests" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <input name="profession" class="form-control"
                                       placeholder="Your Profession" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <input name="period" class="form-control"
                                       placeholder="Period of Stay" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <input name="service_id" value="0" type="hidden"/>

                                <input name="location" class="form-control"
                                       placeholder="Preferred  location" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                         <textarea rows="3" class="form-control" name="expectations"
                                   placeholder="Enter request info" type="text">Detailed Expectations....
                           </textarea>
                            </div>
                        </div>
                            <div class="form-group">
                            <div class="input-icon">
                                <input type="submit" class="btn-sm btn-primary" value="Submit">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Go Top -->
<a class="go-top effect-button">
    <i class="fa fa-angle-up"></i>
</a>

@include('layouts.countries')