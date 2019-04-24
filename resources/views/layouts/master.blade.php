
<!DOCTYPE HTML>
<html>
<head>
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'/>
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel='stylesheet' type='text/css'/>
    <!-- Graph CSS -->
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet'
          type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="{{ asset('admin/css/icon-font.min.css') }}" type='text/css'/>
    <!-- /js -->
    <script src="{{ asset('admin/js/jquery-1.10.2.min.js') }}"></script>
    <!-- //js-->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@8') }}"></script>
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.8.1/css/all.css') }}" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
        <div class="inner-content">
            <!-- header-starts -->
            <div class="header-section">
                <!--menu-right-->
                <div class="top_menu">
                    <div class="main-search">
                        <form action="search.html">
                            <input type="text" value="Search" onFocus="this.value = '';"
                                   onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
                            <input type="submit" value=""/>
                        </form>
                        <div class="close"><img src="{{ asset('admin/images/cross.png') }}"/></div>
                    </div>
                    <div class="srch">
                        <button></button>
                    </div>
                    <script type="text/javascript">
                        $('.main-search').hide();
                        $('button').click(function () {
                                $('.main-search').show();
                                $('.main-search text').focus();
                            }
                        );
                        $('.close').click(function () {
                            $('.main-search').hide();
                        });
                    </script>
                    <!--/profile_details-->
                    <div class="profile_details_left">
                        <ul class="nofitications-dropdown">
                            <li class="dropdown note dra-down">
                                <div id="dd" class="wrapper-dropdown-3" tabindex="1">
                                    <span style="margin-left: -32px;">Bangladesh</span>
                                    <ul class="dropdown">
                                        <li><a class="deutsch">India</a></li>
                                        <li><a class="english"> Nepal</a></li>
                                        <li><a class="espana">Pakistan</a></li>
                                        <li><a class="russian">Usa</a></li>

                                    </ul>
                                </div>
                                <script type="text/javascript">

                                    function DropDown(el) {
                                        this.dd = el;
                                        this.placeholder = this.dd.children('span');
                                        this.opts = this.dd.find('ul.dropdown > li');
                                        this.val = '';
                                        this.index = -1;
                                        this.initEvents();
                                    }

                                    DropDown.prototype = {
                                        initEvents: function () {
                                            var obj = this;

                                            obj.dd.on('click', function (event) {
                                                $(this).toggleClass('active');
                                                return false;
                                            });

                                            obj.opts.on('click', function () {
                                                var opt = $(this);
                                                obj.val = opt.text();
                                                obj.index = opt.index();
                                                obj.placeholder.text(obj.val);
                                            });
                                        },
                                        getValue: function () {
                                            return this.val;
                                        },
                                        getIndex: function () {
                                            return this.index;
                                        }
                                    }

                                    $(function () {

                                        var dd = new DropDown($('#dd'));

                                        $(document).click(function () {
                                            // all dropdowns
                                            $('.wrapper-dropdown-3').removeClass('active');
                                        });

                                    });

                                </script>

                            </li>

                            <li class="dropdown note">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="margin-left: -9px;"><i class="fas fa-envelope"></i>
                                        <span class="badge">3</span></a>


                                <ul class="dropdown-menu two first">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 3 new messages </h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{ asset('admin/images/1.jpg') }}" alt="">
                                            </div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="{{ asset('admin/images/in.jpg') }}" alt="">
                                            </div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{ asset('admin/images/in1.jpg') }}" alt="">
                                            </div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all messages</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown note">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-question"></i><span class="badge">5</span></a>

                                <ul class="dropdown-menu two">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 5 new notification</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{ asset('admin/images/in.jpg') }}" alt="">
                                            </div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="{{ asset('admin/images/in5.jpg') }}" alt="">
                                            </div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{ asset('admin/images/in8.jpg') }}" alt="">
                                            </div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all notification</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown note">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
                                <ul class="dropdown-menu two">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 9 pending task</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar yellow" style="width:40%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="progress progress-striped active">
                                                <div class="bar green" style="width:90%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Mobile App</span><span
                                                    class="percentage">33%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar red" style="width: 33%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Issues fixed</span><span
                                                    class="percentage">80%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar  blue" style="width: 80%;"></div>
                                            </div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all pending task</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!--//profile_details-->
                </div>
                <!--//menu-right-->
                <div class="clearfix"></div>
            </div>
            <!-- //header-ends -->
            <!--outter-wp-->
            <div class="outter-wp">
                <div class="graph-visual tables-main">
                    <h2 class="inner-tittle"> @yield('content_head')</h2>
                    <div class="graph">
                        <div class="block-page">
                            @yield('content')
                        </div>

                    </div>

                </div>
                <!--//graph-visual-->
            </div>
            <!--//outer-wp-->
            <!--footer section start-->
                @include('layouts.footer')
            <!--footer section end-->
        </div>
    </div>
    <!--//content-inner-->
    <!--/sidebar-menu-->
    <div class="sidebar-menu">
        <header class="logo">
            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a
                href="{{ asset('admin/index.html') }}"> <span id="logo"> <h1 style="margin-left: -9px;">{{ config('app.name') }}</h1></span>
                <!--<img id="logo" src="" alt="Logo"/>-->
            </a>
        </header>
        <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
        <!--/down-->
        <div class="down">
            <a href="{{ asset('admin/index.html') }}"><img src="{{ asset('admin/images/admin.jpg') }}"></a>
            <a href="{{ asset('admin/index.html') }}"><span class=" name-caret">Tohidul Islam Swapon</span></a>
            <p>System Administrator and Developer in Company</p>
            <ul>
                <li><a class="tooltips" href="{{ asset('admin/index.html') }}"><span>Profile</span><i
                            class="lnr lnr-user"></i></a></li>
                <li><a class="tooltips" href="{{ asset('admin/index.html') }}"><span>Settings</span><i
                            class="lnr lnr-cog"></i></a></li>
                <li><a class="tooltips" href="{{ asset('admin/index.html') }}"><span>Log out</span><i
                            class="lnr lnr-power-switch"></i></a></li>
            </ul>
        </div>
        <!--//down-->
       @include('layouts.menu')
    </div>
</div>
    <div class="clearfix"></div>

<script>
    var toggle = true;

    $(".sidebar-icon").click(function () {
        if (toggle) {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position": "absolute"});
        } else {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function () {
                $("#menu span").css({"position": "relative"});
            }, 400);
        }

        toggle = !toggle;
    });
</script>
<!--js -->
<script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('admin/js/scripts.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
</body>
</html>
