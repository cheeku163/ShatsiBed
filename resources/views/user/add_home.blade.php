@extends('...layouts.user_layout')
@section('title')
    <title>HomeTourism : New Home</title>
@endsection
@section('content')

    <style rel="stylesheet" >
        .drop-area{
            width:100px;
            height:25px;
            border: 1px solid #999;
            text-align: center;
            padding:10px;
            cursor:pointer;
        }
        #dvPreview img{
            width:100px;
            height:100px;
            margin:5px;
        }
        canvas{
            border:1px solid red;
        }
        .slideOne:hover {
            background-color: #000000;
            border:1px solid red;
            cursor: pointer;
        }
        </style>


    @include('flash::message')
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title" style="text-transform: capitalize;">Create Home Listing</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li> - </li>
                            <li>Home Listing</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <section class="flat-row page-addlisting">
        <div class="container">
            <form method="post" action="{{route('company.submit')}}"
                  enctype="multipart/form-data" class="filter-form form-addlist">
            <div class="add-filter">
                <div class="row">
                    <div class="col-lg-2">
                        <h5 class="title-list">Home Details</h5>
                    </div>
                    <div class="col-lg-10 widget-form">
                            {{ csrf_field() }}

                            <p class="input-info">
                                <label class="nhan">Home Title*</label>
                                <input id="title" name="name" type="text" value="" required="required">
                            </p>
                            <p class="input-info">
                                <label class="nhan">Address <span class="required">*</span></label>
                                <input id="fname" name="address" type="text" value="" required="required">
                            </p>
                            <p class="input-info">
                                <label class="nhan">Price/Cost <span class="required">*</span></label>
                                <input id="lname" placeholder="Price in USD" name="price" type="text" value=""
                                       required="required">
                            </p>
                            <p class="input-info">
                                <label class="nhan">Number Of Rooms <span class="required">*</span></label>
                                <select name="rooms" required>
                                    <option value="">Number of rooms</option>
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                    <option value="4">4 Rooms</option>
                                    <option value="5">5 Rooms</option>
                                </select>
                            </p>
                            <p class="input-info">
                                <label class="nhan">Select Type <span class="required">*</span></label>
                                <select name="type" required>
                                    <option value="">Select Home Type</option>
                                    @foreach(App\Type::all() as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </p>

                            <p class="input-info">
                                <label class="nhan">Country <span class="required">*</span></label>
                                <input id="lname" name="country" list="countries" type="text" value="" required="required">
                            </p>
                            <p class="input-info">
                                <label class="nhan">Description*</label>
                                <textarea class="" tabindex="4" name="description"></textarea>
                            </p>

                            <div class="more-filter">
                                <label class="nhan">Listing Images*</label>
                                <div class="row">
                                    <?php for($i=1; $i<=4; $i++){?>
                                    <div class="form-group ">
                                        <div class="col-md-3">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                                     style="width: 200px; height: 150px;">
                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
                                                </div>
                                                <div>
													<span class="btn btn-default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="file" name="image[]">
													</span>
                                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">
                                                        Remove </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>

                        <div class="more-filter">
                            <label class="nhan">More Fillter*</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="flat-check">
                                        <input type="checkbox" class="slideOne" id="wifi" name="features[]" value="wifi">
                                        <label for="wifi"><span></span>Wifi</label>
                                    </div>
                                    <div class="flat-check">
                                        <input type="checkbox" id="d1" name="features[]" value="mall">
                                        <label for="d1"><span></span>Shopping Mall</label>
                                    </div>
                                    <div class="flat-check">
                                        <input type="checkbox" id="d2" name="features[]" value="hospital">
                                        <label for="d2"><span></span>Hospital</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flat-check">
                                        <input type="checkbox" class="nhan" id="d3" name="features[]" value="water">
                                        <label for="d3"><span></span>Water Access</label>
                                    </div>
                                    <div class="flat-check">
                                        <input type="checkbox" id="d4" name="features[]" value="lake">
                                        <label for="d4"><span></span>Lake/River</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flat-check">
                                        <input type="checkbox" id="d5" name="features[]" value="mountain">
                                        <label for="d5"><span></span>Mountain</label>
                                    </div>
                                    <div class="flat-check">
                                        <input type="checkbox" id="d6" name="features[]" value="park">
                                        <label for="d6"><span></span>National Park</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flat-check">
                                        <input type="checkbox" id="d7" name="features[]" value="swamp">
                                        <label for="d7"><span></span>Swamp</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-contact">
                <div class="row">
                    <div class="col-lg-2">
                        <h5 class="title-list">More Details</h5>
                    </div>
                    <div class="more-filter">
                        <label class="nhan">Current Home Occupants*</label>
                        <div class="row">
                            <div class="col-md-5">
                                <label class="nhan">How many Adults</label>
                                <select name="adults" id="extra">
                                    <option value="">No Adults</option>
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                    <option value="5">5 Adults</option>
                                    <option value="6">6 Adults</option>
                                    <option value="7">7 Adults</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <label class="nhan">How many children</label>
                                <select name="children" id="c-service">
                                    <option value="">No Children</option>
                                    <option value="1">1 Child</option>
                                    <option value="2">2 Children</option>
                                    <option value="3">3 Children</option>
                                    <option value="4">4 Children</option>
                                    <option value="5">5 Children</option>
                                    <option value="6">6 Children</option>
                                    <option value="7">7 Children</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="more-filter">
                        <label class="nhan">Home Facilities*</label>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="nhan">Bathrooms</label>
                                <select name="bathrooms" id="extra">
                                    <option selected value="">No Bathrooms</option>
                                    <option value="1">1 Bathroom</option>
                                    <option value="2">2 Bathroom</option>
                                    <option value="3">3 Bathroom</option>
                                    <option value="4">4 Bathroom</option>
                                    <option value="5">5 Bathroom</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="nhan">Bathrooms</label>
                                <select name="toilets" id="c-service">
                                    <option selected value="">No Toilets</option>
                                    <option value="1">1 Toilet</option>
                                    <option value="2">2 Toilets</option>
                                    <option value="3">3 Toilets</option>
                                    <option value="4">4 Toilets</option>
                                    <option value="5">5 Toilets</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                </div>


            <div class="wrap-accadion">
                <div class="row">
                    <div class="col-lg-2">
                        <h5 class="title-list">More Features</h5>
                    </div>
                    <div class="col-lg-10">
                        <div class="flat-accordion">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description">More Features</label>
                                        <div class="input-group">
                                            <input type="text" name="more_features[]" id="ContactNo" class="form-control"
                                                   placeholder="Enter more features">
                                            <span class="input-group-btn add_field_button">
                                                                    <button class="btn btn-info" type="button">+</button>
                                                               </span>
                                        </div>
                                        <div class="input_fields_wrap">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.flat-accordion -->
                        <div class="button-addlisting">
                            <button type="submit" class="flat-button">Add Listing</button>
                        </div>
                    </div>

                </div>
            </div>
            </form>
        </div>
    </section>

    </div><!-- .site-content -->
@endsection
