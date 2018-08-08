@extends('...layouts.user_layout')
@section('title')
    <title>Shatsi Bed : Search Results</title>
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
                        <h1 class="title">Search Listings</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li> - </li>
                            <li>Search Results</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <section class="main-content page-listing-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="flat-select clearfix">
                        <div class="float-left width50 clearfix">
                            <div class="one-three showing">
                                <p><span>{{$services->count()}}</span> Found Listings</p>
                            </div>
                        </div>
                    </div>
                    @if(sizeof($services)>0)
                    <div class="listing-list">
                        @foreach($services as $service)
                        <div class="flat-product clearfix">
                            <div class="featured-product">
                                <img src="/images/services/user_listing_290x182/{{$service->image}}" alt="image">
                                <div class="time bg-green">
                                    Now Open
                                </div>
                            </div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button">$ {{number_format($service->price)}}</button>
                                    </div>
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button"
                                                onclick="location.href='/homes/{{$service->type->id}}'">
                                            {{$service->type->name}}</button>
                                    </div>
                                    <div class="start-review">
                                        <span class="flat-start">
                                            @for ($k=1; $k <= 5 ; $k++)
                                                <span data-title="Average Rate: 5 / 5" class="bottom-ratings tip">
                                                    <span class="glyphicon glyphicon-star{{ ($k <= $service->rating) ? '' : '-empty'}}"></span>
                                                </span>
                                                @endfor
                                        </span>
                                        <a href="#" class="review">( {{$service->rating}} rating )</a>
                                    </div>
                                </div>
                                <div class="info-product">
                                    <h6 class="title"><a href="/{{$service->slug}}">{{$service->name}}</a></h6>
                                    <p>{{$service->address}}, {{$service->district}}, {{$service->country}}</p>
                                    <a href="#" class="heart">
                                        <i class="ion-android-favorite-outline"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                        <div class="text-center" style="margin-top:50px">
                            <h3>No Homes available from your search!</h3>
                        </div>
                    @endif
                    <div class="blog-pagination style2 text-center">
                        <ul class="flat-pagination clearfix">
                            <?php echo $services->render(); ?>
                        </ul><!-- /.flat-pagination -->
                    </div><!-- /.blog-pagination -->
                </div><!-- /.col-lg-9 -->
                @include('user.right_bar')
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection