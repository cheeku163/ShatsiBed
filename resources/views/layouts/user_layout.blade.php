<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    @yield('title')

    <meta name="author" content="themesflat.com">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>

    <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/responsive.css">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="/assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/assets/revolution/css/settings.css">
	
	<!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/animate.css">

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="/assets/css/animations-ie-fix.css" type="text/css" media="all">
    <script src="/assets/js/html5shiv.min.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->

    <style>
        /* The switch - the box around the slider */
        .switch1 {
            position: relative;
            display: inline-block;
            width: 55px;
            height: 27px;
        }

        /* Hide default HTML checkbox */
        .switch1 input {
            display: none;
        }

        /* The slider */
        .slider1 {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider1:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider1 {
            background-color: #2196F3;
        }

        input:focus + .slider1 {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider1:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider1.round {
            border-radius: 34px;
        }

        .slider1.round:before {
            border-radius: 50%;
        }
    </style>

</head>
<body class="header_sticky">   
    <!-- Preloader -->
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading</h2>
        </div>
    </section> 

<!-- Boxed -->
<div class="boxed">

    @include('layouts.header')

        @yield('content')

    @include('user.site_footer')

</div><!-- .site -->


<script src="/js/full_booking.js"></script>
<!-- Javascript -->
    <script src="/assets/javascript/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider-min.js"></script>
    <script src="/assets/javascript/tether.min.js"></script>
    <script src="/assets/javascript/bootstrap.min.js"></script> 
    <script src="/assets/javascript/jquery.easing.js"></script>    
    <script src="/assets/javascript/jquery-waypoints.js"></script> 
    <script src="/assets/javascript/jquery-countTo.js"></script>  
    <script src="/assets/javascript/owl.carousel.js"></script>
    <script src="/assets/javascript/jquery.cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
    <script src="/assets/javascript/parallax.js"></script>
    <script src="/assets/javascript/bootstrap-slider.min.js"></script>
    <script src="/assets/javascript/smoothscroll.js"></script>   

    <script src="/assets/javascript/main.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
    <script src="/assets/js/form-components.js"></script>

    <!-- Revolution Slider -->
    <script src="/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/assets/revolution/js/slider.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script src="/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>


<script>
    $('div.alert').not('.alert-important').delay(2000).fadeOut(1500);

    //login/register form js
    $(function() {

        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });

    //form wizard js

    $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }

    $(function () {
        $("#fileupload").change(function () {
            if (typeof (FileReader) != "undefined") {
                var dvPreview = $("#dvPreview");
                dvPreview.html("");
                var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                $($(this)[0].files).each(function () {
                    var file = $(this);
                    if (regex.test(file[0].name.toLowerCase())) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var img = $("<img />");
                            img.attr("style", "height:100px;width: 100px");
                            img.attr("src", e.target.result);
                            dvPreview.append(img);
                        }
                        reader.readAsDataURL(file[0]);
                    } else {
                        alert(file[0].name + " is not a valid image file.");
                        dvPreview.html("");
                        return false;
                    }
                });
            } else {
                alert("This browser does not support HTML5 FileReader.");
            }
        });
    });

</script>
<script type="text/javascript">
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="input-group">'+
                    '<input type="text" name="more_features[]" placeholder="Enter another Feature" class="form-control">'+
                    '<span class="remove_field input-group-btn">'+
                    '<button class="btn btn-danger" type="button"><i class="fa fa-remove"></i></button>'+
                    '</span></div>'); //add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });


</script>


</body>
</html>
