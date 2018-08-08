@extends('...layouts.user_layout')
@section('title')
    <title>HomeTourism : {{$company->name}}</title>
@endsection
@section('content')
    @include('flash::message')

    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title" style="text-transform: capitalize;">{{$company->name}}</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li> - </li>
                            <li>{{$company->name}} Details</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->


    <!-- Blog posts -->
    <section class="main-content page-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="listing-wrap">
                        <div class="tf-gallery">
                            <div id="tf-slider">
                                <ul class="slides">
                                    @if(App\ServiceImage::where('company_id',$company->id)->count()>0)
                                        @foreach(App\ServiceImage::where('company_id',$company->id)->get() as $S_images)
                                            <li>
                                                <img src="/images/services/single_service_1170x600/{{$S_images->image}}" alt="image">
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>

                            <div id="tf-carousel">
                                <ul class="slides">
                                    @if(App\ServiceImage::where('company_id',$company->id)->count()>0)
                                        @foreach(App\ServiceImage::where('company_id',$company->id)->get() as $S_images)
                                            <li>
                                                <img src="/images/services/service_listing_364x244/{{$S_images->image}}" alt="image">
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div><!-- /.tf-gallery -->
                        <div class="content-listing">
                            <div class="text">
                                <h3 class="title-listing">{{$company->name}}
                                <span class="pull-right" style="color: #0D0000; font-size: 16px"> Views ({{$company->views}})
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Full Booking: &nbsp;
                                    <label class="switch1 pull-right">
                                        <input type="checkbox" id="sus-check-company{{$company->id}}"
                                               data-property-id="{{$company->id}}"
                                               onchange="fullbooking({{$company->id}});">
                                        <div class="slider1 round"></div>
                                    </label>
                                </span>
                                </h3>
                                <ul class="rating-listing">
                                    <li>
                                        <div class="start-review">
                                            <span class="tour-price-single pull-right animated growIn slower" style="color: #FDC600">
                                                    @for ($k=1; $k <= 5 ; $k++)
                                                    <span data-title="Average Rate: 5 / 5"
                                                          class="bottom-ratings tip">
                                                        <span class="glyphicon glyphicon-star{{ ($k <= $company->rating) ? '' : '-empty'}}"></span>
                                                            </span>
                                                @endfor
                                                ({{$company->rating}})
                                            </span>
                                            <span class="like"> ( {{$company->reviews->count()}} reviewers )</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="social-links">
                                        @if(Auth::guard('user')->user())
                                            @if(Auth::guard('user')->user()->id==$company->user_id)
                                                    <a type="button" class="button" href="/home/{{$company->slug}}/edit">
                                                        <i class="ion-edit"></i><span> Edit</span></a>
                                            @endif
                                        @endif
                                        </div>
                                    </li>
                                    <li>
                                        <div class="social-links">
                                            <span>Share:</span>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <p>{{$company->description}}</p>
                            </div>
                            <h3 class="title-listing">Occupants and Community Setup</h3>
                            <div class="wrap-list clearfix">

                                <ul class="list float-left">
                                    @if($company->adults>0)
                                        <li><span>{{$company->adults}}</span> Adults</li>
                                    @else
                                        <li><span></span>No Adults</li>
                                    @endif
                                    @if($company->children>0)
                                        <li><span>{{$company->children}}</span> Children</li>
                                    @else
                                        <li><span></span>No Children</li>
                                    @endif
                                        @if($company->toilet>0)
                                            <li><span>{{$company->toilet}}</span> Toilets</li>
                                        @else
                                            <li><span></span>No Toilets</li>
                                        @endif

                                </ul>
                                <ul class="list float-left">
                                    @if($company->town>0)
                                            <li><span><i class="fa fa-check"></i></span>Town Setting</li>
                                        @else
                                            <li><span></span>Village setting</li>
                                        @endif
                                        @if($company->shoppingmall>0)
                                            <li><span><i class="fa fa-check"></i></span>Near Shopping Mall</li>
                                        @else
                                            <li><span></span>No Shopping Mall</li>
                                        @endif
                                        @if($company->bathrooms>0)
                                            <li><span>{{$company->bathrooms}}</span> Bathrooms</li>
                                        @else
                                            <li><span></span>No Bathrooms</li>
                                        @endif
                                </ul>

                            </div>
                            <h3 class="title-listing">Features</h3>
                            <div class="wrap-list clearfix">

                                <ul class="list float-left">
                                    @if($company->hospital>0)
                                        <li><span><i class="fa fa-check"></i></span>Hospital Nearby</li>
                                    @else
                                        <li><span></span>No Hospital Nearby</li>
                                    @endif
                                    @if($company->wifi>0)
                                            <li><span><i class="fa fa-check"></i></span>Wifi available</li>
                                        @else
                                            <li><span></span>No Wifi available</li>
                                        @endif
                                        @if($company->wateraccess>0)
                                            <li><span><i class="fa fa-check"></i></span>Water source available</li>
                                        @else
                                            <li><span></span>No Water source</li>
                                        @endif

                                </ul>
                                <ul class="list float-left">

                                    @if($company->river_lake>0)
                                            <li><span><i class="fa fa-check"></i></span>Water Body nearby</li>
                                        @else
                                            <li><span></span>No Water Body nearby</li>
                                        @endif
                                        @if($company->mountain>0)
                                            <li><span><i class="fa fa-check"></i></span>Mountain nearby</li>
                                        @else
                                            <li><span></span>No Mountain nearby</li>
                                        @endif
                                        @if($company->nationalpark>0)
                                            <li><span><i class="fa fa-check"></i></span>National Park nearby</li>
                                        @else
                                            <li><span></span>No National Park nearby</li>
                                        @endif
                                </ul>
                                <ul class="list float-left">
                                    @if($company->swamp>0)
                                        <li><span><i class="fa fa-check"></i></span>Swamp nearby</li>
                                    @else
                                        <li><span></span>No Swamp nearby</li>
                                    @endif

                                </ul>
                            </div>

                            <div class="list-comment">
                                <h3 class="title-listing">{{$company->reviews->count()}} Reviews</h3>
                                <div class="comments-area">
                                    <ol class="comment-list">
                                        @foreach($company->reviews as $review)
                                        <li class="comment">
                                            <article class="comment-body clearfix">
                                                <div class="comment-author">
                                                    <img src="/images/users/contact_user_74x74/{{$review->user->image}}" alt="image">
                                                </div><!-- .comment-author -->
                                                <div class="comment-text">
                                                    <div class="comment-metadata">
                                                        <h5><a href="#">{{$review->user->name}}</a></h5>
                                                        <p class="day"><i class="fa fa-clock-o"></i> {{$review->created_at->format('M d, Y \a\t h:i a')}}</p>
                                                        <div class="flat-start">
                                                            <span class="tour-price-single pull-right animated growIn slower"
                                                                  style="color: #FDC600">
                                                                @for ($k=1; $k <= 5 ; $k++)
                                                                    <span data-title="Average Rate: 5 / 5" class="bottom-ratings tip">
                                                                    <span class="glyphicon glyphicon-star{{ ($k <= $review->rating) ? '' : '-empty'}}">
                                                                    </span>
                                                                    </span>
                                                                @endfor
                                                            </span>
                                                        </div>
                                                    </div><!-- .comment-metadata -->
                                                    <div class="comment-content">
                                                        <p>{{$review->review}} </p>
                                                    </div><!-- .comment-content -->
                                                </div><!-- /.comment-text -->
                                            </article><!-- .comment-body -->
                                        </li><!-- #comment-## -->
                                        @endforeach
                                    </ol><!-- .comment-list -->

                                    <div class="comment-respond" id="respond">
                                        <h3 class="title-listing">Add a Review</h3>
                                        <form novalidate="" class="comment-form clearfix" id="commentform" method="post"
                                              action="{{route('user.review.submit')}}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="company_id" value="{{ $company->id }}">
                                            <div class="wrap-input clearfix">
                                                <div class="start-review">
                                                    {{Form::hidden('rating', null, array('id'=>'ratings-hidden'))}}
                                                    <label><span class="range-title">Rate:</span> </label>
                                                    <div class="start-review">
                                                        <div class="stars starrr pull-left"></div>
                                                        <a href="#" class="btn btn-danger btn-sm" id="close-review-box"
                                                           style="display:none;">
                                                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="comment-form-comment">
                                                <label><span class="range-title">Review:</span></label>
                                                <textarea class="" tabindex="4" placeholder="Preview" name="review" required></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <button class="comment-submit effect-button">Send Review</button>
                                            </p>
                                        </form>
                                    </div><!-- /.comment-respond -->
                                </div><!-- /.comments-area -->
                            </div>

                        </div>
                    </div><!-- /.listing-wrap -->
                </div><!-- /.col-lg-9 -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget widget_listing">
                            <h5 class="widget-title">Popular Listing</h5>
                            <ul>
                                @foreach($popular as $popular)
                                <li>
                                    <div class="featured">
                                        <a href="/{{$popular->slug}}" class="effect">
                                            <img src="/images/services/others_100x75/{{$popular->image}}" alt="image"></a>
                                    </div>
                                    <div class="info-listing">
                                        <h6><a href="/{{$popular->slug}}" >{{$popular->name}}</a></h6>
                                        <div class="start-review">
                                            <span class="tour-price-single pull-right animated growIn slower"
                                                  style="color: #FDC600">
                                                @for ($k=1; $k <= 5 ; $k++)
                                                    <span data-title="Average Rate: 5 / 5" class="bottom-ratings tip">
                                                        <span class="glyphicon glyphicon-star{{ ($k <= $popular->rating) ? '' : '-empty'}}">
                                                        </span>
                                                    </span>
                                                @endfor
                                            </span>
                                            <a href="/{{$popular->slug}}" class="review">
                                                {{$popular->reviews->count()}} Reviews</a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class=" widget widget-form">
                            @if(Auth::guard('user')->user())
                                @if($company->full_booking<1)
                                <p class="form-submit text-center">
                                    <button class="book-submit effect-button"
                                            href="#" data-toggle="modal"
                                            data-target="#booking-popup">Book now</button>
                                </p>
                                @else
                                    <p class="form-submit text-center">
                                        <button class="book-submit effect-button">Fully Booked</button>
                                    </p>
                                @endif
                                @else
                                @if($company->full_booking<1)
                                <p class="form-submit text-center">
                                    <button class="book-submit effect-button"
                                            href="#" data-toggle="modal"
                                            data-target="#booking-popup">Request this Home</button>
                                </p>
                                @else
                                    <p class="form-submit text-center">
                                        <button class="book-submit effect-button">Fully Booked</button>
                                    </p>
                                @endif
                                @endif
                        </div>
                        <div class="widget widget-contact">
                            <h5 class="widget-title">Contact Us</h5>
                            <ul>
                                <li class="adress">PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                                <li class="phone">+61 3 8376 6284</li>
                                <li class="email">Yourplace@gmail.com</li>
                                <li class="time">
                                    <span>Mon - Thur:</span> 8:00 am - 10:00 pm<br>
                                    <span>Fri - Sat:</span> 10:00 am - 1:00 am<br>
                                    <span>Sun: </span> 10:00 am - 10:00 pm
                                </li>
                            </ul>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <div class="modal fade" id="booking-popup">
    <div class="modal-dialog">
        <div class="modal-content">
        <form method="post" action="{{route('submit.request')}}">
            {{ csrf_field() }}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
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
                        <input name="service_id" value="{{$company->id}}" type="hidden"/>
                        <input name="slug" value="{{$company->slug}}" type="hidden"/>

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

            </div>

            <div class="modal-footer">
                <button type="button" class="btn-sm btn-warning pull-left"
                        data-dismiss="modal">Cancel
                </button>
                <input type="submit" class="btn-sm btn-primary pull-right" value="Submit">
            </div>

        </form>
        </div>
    </div>
    </div>

@endsection