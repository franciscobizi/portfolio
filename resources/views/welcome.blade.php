<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio of Francisco Bizi">
    <meta name="author" content="">

    <title>Freelancer - Francisco Bizi</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="styles/css/freelancer.css" rel="stylesheet">
    <style>
         .cor{
            //outline: 0;
            color: #f66;//#18bc9c;
        }
    </style>
    <!-- Custom Fonts -->
    <link href="styles/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://www.google.com/fonts#QuickUsePlace:quickUse/Family:Lobster" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
        <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            {{isset($Lang) ? App::setLocale($Lang) : false}}
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">{{trans('home.label1')}}</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="{{App::getLocale()}}" style="color:#f66" >
                                {{ Config::get('linguas')[App::getLocale()] }}
                                
                        </a>
                    </li>
                                @foreach (Config::get('linguas') as $lang => $language)
                                        @if ($lang != App::getLocale())
                    <li>
                        <a href="{{$lang}}" >{{ $language }}</a> 
                    </li>
                                        @endif
                                @endforeach
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
   
      
        <!-- Navigation -->
        <div class="left-menu">
            <ul class="list-group ">
                            <li class="page-scroll">
                                <a href="#page-top" class="btn-social btn-outline" title="[ {{trans('home.label17')}} ]"><i class="fa fa-fw fa-home"></i></a>
                            </li>
                            <li class="page-scroll">
                                <a href="#portfolio" class="btn-social btn-outline" title="[ {{trans('home.label1')}} ]"><i class="fa fa-fw fa-suitcase"></i></a>
                            </li>
                           
                            <li class="page-scroll">
                                <a href="#about" class="btn-social btn-outline" title="[ {{trans('home.label4')}} ]"><i class="fa fa-fw fa-user"></i></a>
                            </li>
                            <li class="page-scroll">
                                <a href="#contact" class="btn-social btn-outline" title="[ {{trans('home.label5')}} ]"><i class="fa fa-fw fa-envelope"></i></a>
                            </li>
                            <li class="page-scroll">
                                <a href="{{url('resume/resume.pdf')}}" target="_blank" class="btn-social btn-outline" title="[ {{trans('home.label16')}} ]"><i class="fa fa-fw fa-file-pdf-o"></i></a>
                            </li>
                            
                        </ul>
        </div>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                    
                                
                                
                            
                    <img class="img-circle" src="styles/img/me.jpg" alt="[My picture]">
                    <div class="intro-text">
                        <span class="name">Francisco Bizi</span>
                        <!--hr class="star-light"-->
                        <hr class="linha">
                        <span class="skills">{{trans('home.label2')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="darc">{{trans('home.label3')}}</h2>
                    <div class="break"></div>
                    <div class="break"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="styles/img/portfolio/1.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="styles/img/portfolio/2.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="styles/img/portfolio/3.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="styles/img/portfolio/5.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="styles/img/portfolio/8.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="styles/img/portfolio/4.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>{{trans('home.label4')}}</h2>
                    <hr class="linha">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p class="justify">{{trans('home.about')}}</p>
                    <h4 class="justify">{{trans('home.about_title')}}</h4>
                    <p class="justify">{{trans('home.about_comprimiss')}}</p>
                </div>
                <!--div class="col-lg-4">
                    <p>I invitide you to open the followings projects in my portfolio and I hope so that we can work together in future.!</p>
                </div-->
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <!--a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a-->
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="darc">{{trans('home.label5')}}</h2>
                    <!--hr class="star-primary"-->
                    <div class="break"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>{{trans('home.label10')}}</label>
                                <input type="text" class="form-control" placeholder="{{trans('home.label10')}}" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>{{trans('home.label11')}}</label>
                                <input type="email" class="form-control" placeholder="{{trans('home.label11')}}" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>{{trans('home.label12')}}</label>
                                <input type="tel" class="form-control" placeholder="{{trans('home.label12')}}" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>{{trans('home.label13')}}</label>
                                <textarea rows="5" class="form-control" placeholder="{{trans('home.label13')}}" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">{{trans('home.label6')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>{{trans('home.label7')}}</h3>
                        <p>{{trans('home.label8')}} - {{trans('home.label14')}}</p>
                    </div>
                    <div class="footer-col col-md-4">
                        
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>{{trans('home.label9')}}</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/francisco.bizi" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                           
                            <li>
                                <a href="https://www.linkedin.com/in/celestino-bizi-a01ba763?trk=nav_responsive_tab_profile" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="http://vk.com/id27936609" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-vk"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        {{date("Y")}} &copy; wwww.taylorsoft.net 
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 class="cor">Admc-soft</h2>
                            <div class="break"></div>
                            <img src="styles/img/portfolio/1.jpg" class="img-responsive img-centered" alt="">
                            <p>{{trans('home.project1')}}</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="#">ADMC</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="#">{{trans('home.pdata')}}</a></strong>
                                    
                                </li>
                                <li>Service:
                                    <strong><a href="#">{{trans('home.label15')}}</a></strong>
                                    
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>{{trans('home.close')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 class="cor">ISPLC</h2>
                            <div class="break"></div>
                            <img src="styles/img/portfolio/2.jpg" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="#">ISPLC</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="#">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 class="cor">GU-ISPCAB</h2>
                            <div class="break"></div>
                            <img src="styles/img/portfolio/3.jpg" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="#">GU-ISPCAB</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="#">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 class="cor">Birth in America</h2>
                            <div class="break"></div>
                            <img src="styles/img/portfolio/5.jpg" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="#">Birth</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="#">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 class="cor">ISPCAB</h2>
                            <div class="break"></div>
                            <img src="styles/img/portfolio/8.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="#">ISPCAB</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="#">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 class="cor">Taylorsoft,Lda</h2>
                            <div class="break"></div>
                            <img src="styles/img/portfolio/4.jpg" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="#">Taylorsoft,Lda</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="#">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="styles/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="styles/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="styles/js/classie.js"></script>
    <script src="styles/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="styles/js/jqBootstrapValidation.js"></script>
    <script src="styles/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="styles/js/freelancer.js"></script>
    <script>
        $(function(){   
            var nav = $('#menuHeader');   
            $(window).scroll(function () { 
            if ($(this).scrollTop() > 20) { 
            nav.addClass("navhidden"); 
            } else { 
            nav.removeClass("navhidden"); 
            } 
            });  
        });                                                                                     
    </script>

</body>

</html>
