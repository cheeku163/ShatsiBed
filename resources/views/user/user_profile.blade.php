@extends('...layouts.user_layout')
@section('title')
    <title>Shatsi Bed : User Account</title>
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
                        <h1 class="title" style="text-transform: capitalize;">{{Auth::guard('user')->user()->name}}</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li> - </li>
                            <li>User Account</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <section class="flat-row page-user bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="flat-user">
                        <a href="{{route('user.profile.edit')}}" class="edit" title="">Edit Profile <i class="ion-edit"></i></a>
                        <div class="avatar">
                            <img src="images/users/profile_330x330/{{Auth::guard('user')->user()->image}}" alt="image">
                        </div>
                        <h3 class="name" style="text-transform: capitalize;">{{Auth::guard('user')->user()->name}}</h3>
                        <ul class="info">
                            <li class="phone"><i class="fa fa-phone"></i>
                                <a href="#" title="">{{Auth::guard('user')->user()->phone}}</a></li>
                            <li class="email"><i class="fa fa-envelope"></i>
                                <a href="#" title="">{{Auth::guard('user')->user()->email}}</a></li>
                            <li class="face"><i class="fa fa-map-marker"></i>
                                <a href="#" title="">{{Auth::guard('user')->user()->address}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="flat-tabs style2" data-effect="fadeIn">
                        <ul class="menu-tab clearfix">
                            <li class="active"><a href="#">
                                    <i class="ion-navicon-round"></i>({{Auth::guard('user')->user()->companies->count()}}) Listings</a></li>
                            <li class=""><a href="#"><i class="ion-chatbubbles"></i>Home Requests</a></li>
                        </ul><!-- /.menu-tab -->

                        <div class="content-tab listing-user">
                            <div class="content-inner active listing-list">
                                @if(sizeof($companies)>0)
                                @foreach($companies as $company)
                                    <div class="flat-product clearfix">
                                        <div class="featured-product">
                                            <img src="/images/services/user_listing_290x182/{{$company->image}}" alt="image">
                                            <div class="time bg-green">
                                                Now Open
                                            </div>
                                        </div>
                                        <div class="rate-product">
                                            <div class="link-review clearfix">
                                                <div class="button-product float-left">
                                                    <button type="button" class="flat-button">$ {{number_format($company->price)}}</button>
                                                </div>

                                                <div class="start-review">
                                        <span class="flat-start">
                                            @for ($k=1; $k <= 5 ; $k++)
                                                <span data-title="Average Rate: 5 / 5" class="bottom-ratings tip">
                                                    <span class="glyphicon glyphicon-star{{ ($k <= $company->rating) ? '' : '-empty'}}"></span>
                                                </span>
                                            @endfor
                                        </span>
                                                    <a href="#" class="review">( {{$company->rating}} rating )</a>
                                                </div>
                                            </div>
                                            <div class="info-product">
                                                <h6 class="title"><a href="/{{$company->slug}}">{{$company->name}}</a></h6>
                                                <p>{{$company->address}}, {{$company->district}}, {{$company->country}}</p>

                                            </div>
                                        </div>
                                        <ul class="wrap-button float-right">
                                            <li>
                                                <div class="button-product float-right">
                                                    <a href="#">
                                                        <span onclick="location.href='/homes/{{$company->type->id}}'">
                                                            {{$company->type->name}}</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <button type="button" class="button" onclick="location.href='/home/{{$company->slug}}/edit'">
                                                    <i class="ion-edit"></i><span>Edit</span></button>
                                            </li>
                                            <li>
                                                <button type="button" class="button" onclick="location.href='#'">
                                                    <i class="ion-trash-a"></i><span>Delete</span></button>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                                @else
                                    <div class="text-center" style="margin-top:50px">
                                        <h3>No Homes available under your account!</h3>
                                    </div>
                                @endif
                                <div class="blog-pagination style2 text-center">
                                    <ul class="flat-pagination clearfix">
                                        <?php echo $companies->render(); ?>
                                    </ul><!-- /.flat-pagination -->
                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="author-review content-listing">
                                    <div class="comments-area">
                                        <ol class="comment-list">
                                            @foreach($orders as $order)
                                                @if($order->company->user_id == Auth::guard('user')->id())
                                                <li class="comment">
                                                    <article class="comment-body clearfix">
                                                        <div class="comment-author">
                                                            <img src="/images/services/user_services_120x120/{{$order->company->image}}" alt="image">
                                                        </div><!-- .comment-author -->
                                                        <div class="comment-text">
                                                            <div class="comment-metadata">
                                                                <h5><a href="#">{{$order->name}} </a>
                                                                    <span>on {{$order->company->name}}</span></h5>
                                                                <p class="day">{{$order->created_at}}</p> <
                                                            </div><!-- .comment-metadata -->
                                                            <div class="comment-content">
                                                                <p>{{$order->expectations}}</p>
                                                            </div><!-- .comment-content -->
                                                        </div><!-- /.comment-text -->
                                                    </article><!-- .comment-body -->
                                                </li><!-- #comment-## -->
                                                @else
                                                    <div class="text-center" style="margin-top:50px">
                                                        <h3>No Homes Requests available under your account!</h3>
                                                    </div>
                                                @endif

                                                <div class="modal fade flat-popupform" id="popup_login">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-hidden="true">&times;</button>
                                                            </div>
                                                            <div class="modal-body text-center clearfix">
                                                                <p class="no-margin"><strong>Client Name:</strong>
                                                                    <a href="#"> {{$order->name}} </a></p></li>

                                                                <p class="no-margin"><strong>Client Contact:</strong>
                                                                    <a href="#">{{$order->contact}}</a> </p>

                                                                <p class="no-margin"><strong>Client Age:</strong>
                                                                    <a href="#">{{$order->age}}</a> </p>

                                                                <p class="no-margin"><strong>Period of Stay:</strong>
                                                                    <a href="#">{{$order->period}}</a> </p>

                                                                <p class=" no-margin "><strong>Email
                                                                        Address:</strong>
                                                                    <a href="#">{{$order->email}}</a></p>

                                                                <p class="no-margin"><strong>Number of Guests:</strong>
                                                                    <a href="#">{{$order->guests}}</a> </p>

                                                                <p class="no-margin"><strong>Preferred Location:</strong>
                                                                    <a href="#">{{$order->location}}</a></p>

                                                                <p class="no-margin"><strong>Order Date:</strong>
                                                                    <a href="#">{{$order->created_at}}</a></p>

                                                                <p class="no-margin"><strong>Expectations:</strong>
                                                                    <a href="#">{{$order->expectations}}</a></p>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        @endforeach
                                        </ol><!-- .comment-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection