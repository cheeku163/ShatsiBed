<!-- Header -->
<header id="header" class="header clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div id="logo" class="logo float-left">
                    <a href="/" rel="home">
                        <img src="/assets/images/logo.png" alt="image">
                    </a>
                </div><!-- /.logo -->
                <div class="btn-menu">
                    <span></span>
                </div><!-- //mobile menu button -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="nav-wrap">
                    <nav id="mainnav" class="mainnav float-left">
                        <ul class="menu">
                            <li class="home">
                                <a href="{{route('user.about')}}">About</a>
                            </li>

                            @if(Auth::guard('user')->user() )
                                <li>
                                    <a class="home" href="{{route('user.profile')}}"
                                       style="color: black">
                                        <span class="fa fa-user"></span> <b> My Account</b></a>
                                </li>
                                <li><a class="home" href="{{route('user.logout')}}"
                                       style="color: black">
                                        <span class="fa fa-lock"></span> <b> Logout</b></a>
                                </li>
                            @else
                                <li>
                                    <a data-toggle="modal" href="#popup_login">
                                        <i class="fa fa-user"></i> Sign in</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" href="#popup_register">
                                        <i class="fa fa-user-plus"></i> Register</a>
                                </li>
                            @endif
                            <li>
                                <a data-toggle="modal" href="#booking-popup">
                                    <i class="fa fa-clipboard"></i> Request a Home</a>
                            </li>

                        </ul><!-- /.menu -->
                    </nav><!-- /.mainnav -->

                    <div class="button-addlist float-right">
                        <button type="button" class="flat-button" onclick="location.href='{{route('company.create')}}'">Become a Host</button>
                    </div>
                </div><!-- /.nav-wrap -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div>
</header><!-- /.header -->