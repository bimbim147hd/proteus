<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="title" content="Organic energy & protein powders"/>
    <meta name="description" content="Healthier Sports Proteins in personal packets tailored to your fitness routine in monthly plans. "/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="Organic energy & protein powders" />
    <meta property="og:image" content="{{url('/')}}/assets/images/400x209.png" />
    <meta property="og:description" content="Healthier Sports Proteins in personal packets tailored to your fitness routine in monthly plans. " />
    <title>Proteus</title>
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/gif" sizes="16x16">
    <link href="{{ asset('assets/dist/app.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115060305-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-115060305-1');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '595454987461031');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
        src="https://www.facebook.com/tr?id=595454987461031&ev=PageView
        &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>
   <!-- Header -->
        <header style="background: url(../assets/images/banner.jpg) no-repeat center center /cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center animated fadeIn">
                        <div class="logo"><a href="{{asset('/')}}"><img src="assets/images/logo.png" alt="" /></a></div>
                        <h1>HEALTHIER SPORTS PROTEINS</h1>
                        <p>
                           We design & deliver protein blends that suit your own body, goals and sport routine. Launching soon: Subscribe to get notified.
                        </p>
                        <div class="top-form">
                             <form id="formEmail" action="{{asset('/')}}" method="post">
                                {{ csrf_field() }}
                                <input id="email" class="email" type="email" name="email" value="{{old('email')}}" placeholder="ENTER YOUR EMAIL">
                                <input type="hidden" name="code" value="
                                    @if (isset($_GET['rel']))
                                        {{$_GET['rel']}}
                                    @else
                                        {{''}}
                                    @endif
                                    " placeholder="">
                                {{-- <input class="send" type="submit" name="send" value="JOIN OUR WAITING LIST"> --}}
                                <button class="send" name="send" type="submit">JOIN OUR WAITING LIST</small></button>
                                <div class="errorTxt"></div>
                                <p style="margin-top: 15px;"><u>& GET FREE PACK</u></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @yield('popup')
        </header>
        <!-- ./Header -->

        <!-- Proteus -->
        <section class="proteus" style="background: url(../assets/images/bk1.jpg) no-repeat center bottom /cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="sec-title">WE BUILD BLENDS FOR YOUR BODY & HEALTH</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./Proteus -->

        <!-- Approach -->
        <section class="approach">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">

                        <div class="approach-inner">
                             <h2 class="sec-title">OUR APPROACH</h2>
                        <p>
                            We are a team of nutritionists, athletes and sport coaches believing that your current chemical proteins solutions <strong>don't fit your body and damage your health</strong>.
                        </p>
                        <p>
                            We decided to build a new type of service that let you design in no time the perfect protein blend for you made of natural ingredients by selecting your body characteristics, goals, tastes and sport routine.
                        </p>
                        <p>
                            Our protein blends are custom made for yourself and delivered monthly at your doorstep. You can unsubscribe whenever you want.
                        </p>
                        </div>
                    </div>
                    <div class="col-md-5" style="padding-right: 0; padding-left: 0;">
                        <img src="assets/images/img-1.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- ./Approach -->



        <!-- Footer -->
        <footer>
             <span>Contact</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:hello@proteushealth.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/Proteushealth/" target="_blank" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </footer>
        <!-- ./Footer -->
    <script src="{{ asset('assets/dist/app.js') }}"></script>
</body>
</html>
