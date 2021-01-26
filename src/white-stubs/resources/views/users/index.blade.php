<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ __('White Dashboard Laravel by Creative Tim & UPDIVISION') }}</title>
        <!-- Favicon -->

       <!-- Extra details for Live View on GitHub Pages -->
        <!-- Canonical SEO -->
        <link rel="canonical" href="https://www.creative-tim.com/product/white-dashboard-laravel" />


        <!--  Social tags      -->
        <meta name="keywords" content="design system, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, white, white dashboard, creative tim, updivision, html dashboard, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap dashboard, responsive dashboard, laravel, laravel php, laravel php framework, free laravel admin template, free laravel admin, free laravel admin template + Front End + CRUD, crud laravel php, crud laravel, laravel backend admin dashboard">
        <meta name="description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up">


        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="White Dashboard Laravel by Creative Tim & UPDIVISION">
        <meta itemprop="description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up">

        <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/215/opt_wd_laravel_thumbnail.jpg">


        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@creativetim">
        <meta name="twitter:title" content="White Dashboard by Creative Tim & UPDIVISION">

        <meta name="twitter:description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up">
        <meta name="twitter:creator" content="@creativetim">
        <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/215/opt_wd_laravel_thumbnail.jpg">


        <!-- Open Graph data -->
        <meta property="fb:app_id" content="655968634437471">
        <meta property="og:title" content="White Dashboard by Creative Tim & UPDIVISION" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://www.creative-tim.com/live/white-dashboard-laravel" />
        <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/215/opt_wd_laravel_thumbnail.jpg"/>
        <meta property="og:description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up" />
        <meta property="og:site_name" content="Creative Tim" />

        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('white') }}/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('white') }}/img/favicon.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('white') }}/css/nucleo-icons.css" rel="stylesheet" />
        <!-- CSS -->
        <link href="{{ asset('white') }}/css/white-dashboard.css?v=1.0.0" rel="stylesheet" />
        <link href="{{ asset('white') }}/css/theme.css" rel="stylesheet" />

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
        <!-- End Google Tag Manager -->
        <script>
        // Facebook Pixel Code Don't Delete
            ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
            }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');
            try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");
            } catch (err) {
            console.log('Facebook Track Error:', err);
            }
        </script>
    </head>
<body class="white-content clickup-chrome-ext_installed">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
    </noscript>
                <div class="wrapper">
                    <div class="sidebar">
                        <div class="sidebar-wrapper">
                            <div class="logo">
                                <a href="#" class="simple-text logo-mini">{{ _('WD') }}</a>
                                <a href="#" class="simple-text logo-normal">{{ _('White Dashboard') }}</a>
                            </div>
                            <ul class="nav">
                                <li>
                                    <a href="{{ route('home') }}">
                                        <i class="tim-icons icon-chart-pie-36"></i>
                                        <p>{{ _('Dashboard') }}</p>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                                        <i class="fab fa-laravel" ></i>
                                        <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                                        <b class="caret mt-1"></b>
                                    </a>
                    
                                    <div class="collapse show" id="laravel-examples">
                                        <ul class="nav pl-4">
                                            <li >
                                                <a href="{{ route('profile.edit')  }}">
                                                    <i class="tim-icons icon-single-02"></i>
                                                    <p>{{ _('User Profile') }}</p>
                                                </a>
                                            </li>
                                            <li class="active" >
                                                <a href="{{ route('user.index')  }}">
                                                    <i class="tim-icons icon-bullet-list-67"></i>
                                                    <p>{{ _('User Management') }}</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li >
                                    <a href="{{ route('pages.icons') }}">
                                        <i class="tim-icons icon-atom"></i>
                                        <p>{{ _('Icons') }}</p>
                                    </a>
                                </li>
                                <li >
                                    <a href="{{ route('pages.maps') }}">
                                        <i class="tim-icons icon-pin"></i>
                                        <p>{{ _('Maps') }}</p>
                                    </a>
                                </li>
                                <li >
                                    <a href="{{ route('pages.notifications') }}">
                                        <i class="tim-icons icon-bell-55"></i>
                                        <p>{{ _('Notifications') }}</p>
                                    </a>
                                </li>
                                <li >
                                    <a href="{{ route('pages.tables') }}">
                                        <i class="tim-icons icon-puzzle-10"></i>
                                        <p>{{ _('Table List') }}</p>
                                    </a>
                                </li>
                                <li >
                                    <a href="{{ route('pages.typography') }}">
                                        <i class="tim-icons icon-align-center"></i>
                                        <p>{{ _('Typography') }}</p>
                                    </a>
                                </li>
                                <li >
                                    <a href="{{ route('pages.rtl') }}">
                                        <i class="tim-icons icon-world"></i>
                                        <p>{{ _('RTL Support') }}</p>
                                    </a>
                                </li>
                                 <li class="bg-info">
                                    <a href="{{ route('pages.upgrade') }}">
                                        <i class="tim-icons icon-spaceship"></i>
                                        <p>{{ _('Upgrade to PRO') }}</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
            <div class="main-panel">
                <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle d-inline">
                                <button type="button" class="navbar-toggler">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <a class="navbar-brand" href="#">{{ $page ?? __('Dashboard') }}</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav ml-auto">
                                <li class="search-bar input-group">
                                    <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                                        <span class="d-lg-none d-md-block">{{ __('Search') }}</span>
                                    </button>
                                </li>
                                <li class="dropdown nav-item">
                                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <div class="notification d-none d-lg-block d-xl-block"></div>
                                        <i class="tim-icons icon-sound-wave"></i>
                                        <p class="d-lg-none"> {{ __('Notifications') }} </p>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                                        <li class="nav-link">
                                            <a href="#" class="nav-item dropdown-item">{{ __('Mike John responded to your email') }}</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#" class="nav-item dropdown-item">{{ __('You have 5 more tasks') }}</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#" class="nav-item dropdown-item">{{ __('Your friend Michael is in town') }}</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#" class="nav-item dropdown-item">{{ __('Another notification') }}</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#" class="nav-item dropdown-item">{{ __('Another one') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown nav-item">
                                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/anime3.png" alt="{{ __('Profile Photo') }}">
                                        </div>
                                        <b class="caret d-none d-lg-block d-xl-block"></b>
                                        <p class="d-lg-none">{{ __('Log out') }}</p>
                                    </a>
                                    <ul class="dropdown-menu dropdown-navbar">
                                        <li class="nav-link">
                                            <a href="{{ route('profile.edit') }}" class="nav-item dropdown-item">{{ __('Profile') }}</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#" class="nav-item dropdown-item">{{ __('Settings') }}</a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="nav-link">
                                            <a href="{{ route('logout') }}" class="nav-item dropdown-item" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="separator d-lg-none"></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="{{ __('SEARCH') }}">
                                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
                                    <i class="tim-icons icon-simple-remove"></i>
                              </button>
                            </div>
                        </div>
                    </div>
                </div>
                
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
          </button>
        </div>
    </div>
</div>
</div>


                <div class="content">
                        <div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">Users</h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#" class="btn btn-sm btn-primary">Add user</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                
                <div class="">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                            <tr><th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Creation Date</th>
                            <th scope="col"></th>
                        </tr></thead>
                        <tbody>
                                                                <tr>
                                    <td>Admin Admin</td>
                                    <td>
                                        <a href="mailto:admin@white.com">admin@white.com</a>
                                    </td>
                                    <td>25/02/2020 09:11</td>
                                    <td class="text-right">
                                                                                        <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                                                        </div>
                                            </div>
                                                                                </td>
                                </tr>
                                                        </tbody>
                    </table>
                </div>
                
            </div>
            
            <div class="card-footer py-4">
                
                <nav class="d-flex justify-content-end" aria-label="...">
                    
                </nav>
            </div>
        </div>
        <div class="alert alert-danger">
            <span>
              <b> </b> This is a PRO feature!</span>
          </div>
    </div>
</div>
                </div>

                <footer class="footer">
<div class="container-fluid">
    <ul class="nav">
        <li class="nav-item">
            <a href="https://creative-tim.com" target="blank" class="nav-link">
                Creative Tim
            </a>
        </li>
        <li class="nav-item">
            <a href="https://updivision.com" target="blank" class="nav-link">
                Updivision
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                About Us
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                Blog
            </a>
        </li>
    </ul>
    <div class="copyright">
        © 2020 made with <i class="tim-icons icon-heart-2"></i> by
        <a href="https://creative-tim.com" target="_blank">Creative Tim</a> &amp;
        <a href="https://updivision.com" target="_blank">Updivision</a> for a better web.
    </div>
</div>
</footer>
            </div>
        </div>
    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
            @csrf
            <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors text-center">
                    <span class="badge filter badge-primary active" data-color="primary"></span>
                    <span class="badge filter badge-info" data-color="blue"></span>
                    <span class="badge filter badge-success" data-color="green"></span>
                </div>
                <div class="clearfix"></div>
                </a>
            </li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/white-dashboard-laravel" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
                <a href="https://white-dashboard-laravel.creative-tim.com/docs/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
                Documentation
                </a>
            </li>
            <li class="header-title">Thank you for 95 shares!</li>
            <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> · 45</button>
                <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> · 50</button>
                <br>
                <br>
                <a class="github-button btn btn-round btn-default" href="https://github.com/creativetimofficial/white-dashboard-laravel" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
            </ul>
        </div>
    </div>
    <script src="{{ asset('white') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('white') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('white') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('white') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
    <!-- Chart JS -->
    {{-- <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script> --}}
    <!--  Notifications Plugin    -->
    <script src="{{ asset('white') }}/js/plugins/bootstrap-notify.js"></script>

    <script src="{{ asset('white') }}/js/white-dashboard.js?v=1.0.0"></script>
    <script src="{{ asset('white') }}/js/theme.js"></script>

@stack('js')

    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');
                $main_panel = $('.main-panel');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                $('.fixed-plugin a').click(function(event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                    } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data', new_color);
                    }

                    if ($main_panel.length != 0) {
                        $main_panel.attr('data', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        whiteDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        whiteDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                        var $btn = $(this);

                        if (white_color == true) {
                            $('body').addClass('change-background');
                            setTimeout(function() {
                                $('body').removeClass('change-background');
                                $('body').removeClass('white-content');
                            }, 900);
                            white_color = false;
                        } else {
                            $('body').addClass('change-background');
                            setTimeout(function() {
                                $('body').removeClass('change-background');
                                $('body').addClass('white-content');
                            }, 900);

                            white_color = true;
                        }
                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
    @stack('js')
</body>
</html>
