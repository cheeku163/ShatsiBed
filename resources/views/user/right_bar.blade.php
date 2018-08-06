<div class="col-lg-3">
    <div class="sidebar">
        <div class=" widget widget-form style2">
            <h5 class="widget-title">
                Search Box
            </h5>
            <form novalidate="" class="filter-form clearfix" id="filter-form"
                  method="get" action="{{route('users.search')}}">
                <p class="book-notes">
                    <input type="text" placeholder="What are you looking for?" name="keyword" required="">
                </p>
                <p class="book-form-select icon">
                    <select class=" dropdown_sort" name="type">
                        <option value="">All Categories</option>
                        @foreach(App\Type::all() as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                    <i class="fa fa-angle-down"></i>
                </p>
                <p class="book-form-address icon">
                    <input type="text" placeholder="Address" list="countries" name="location"  required="">
                    <i class="ion-android-locate"></i>
                </p>
                <p class="form-submit text-center">
                    <button class="flat-button" type="submit">Search <i class="ion-ios-search-strong"></i></button>
                </p>
            </form>
        </div>
        <div class="widget widget-map">
            <h5 class="widget-title">Contact us</h5>
            <address class="animated fadeInUpShort">
                <strong> Address:</strong> Plot 1-2 Jobiah Road,
                Mukono Kampala Uganda.
            </address>
            <p class="phone-number animated fadeInUpShort"><strong>Phone:</strong>+256-775745803</p>
            <p class="email animated fadeInUpShort"><strong>Email:</strong> info@shatsi.com </p>
            <div class="social-links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div><!-- /.sidebar -->
</div><!-- /.col-md-3 -->