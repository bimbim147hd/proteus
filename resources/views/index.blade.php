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
        https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1701311586578775');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
        src="https://www.facebook.com/tr?id=1701311586578775&ev=PageView
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
                            We design your tailored nutrition routine!
                            Delivered at your doorstep every month.
                            Our services will be available in a few weeks.
                        </p>
                        <div class="top-form">
                            <form id="formEmail" action="{{asset('/')}}" method="post">
                                {{ csrf_field() }}
                                <input type="email" value="{{old('email')}}" class="form-control animated fadeIn" id="email" name="email" placeholder="ENTER YOUR EMAIL" />
                                 <input type="hidden" name="code" value="
                                    @if (isset($_GET['rel']))
                                        {{$_GET['rel']}}
                                    @else
                                        {{''}}
                                    @endif
                                    " placeholder="">
                                {{-- <button type="submit" name="send" class="btn btn-primary btn--dark animated fadeIn">JOIN OUR WAITING LIST</button> --}}

                                <input type="submit" name="send" class="btn btn-primary btn--dark animated fadeIn" value="JOIN OUR WAITING LIST">
                                <div class="errorTxt"></div>
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
            <div class="">
                <div class="row">
                    <div class="col-md-7">
                        <div class="approach-inner">
                             <h2 class="sec-title">OUR APPROACH</h2>
                        <p>
                            We are a team of nutritionists, athletes and sport coaches believing that your current chemical proteins solutions don't fit your body and damage your health.
                        </p>
                        <p>
                            We decided to build a new type of protein made of natural ingredients with supernatural powers.
                        </p>
                        <p>
                            Our proteins are custom made for you and delivered monthly to your door.
                        </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="assets/images/img-1.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- ./Approach -->



        <!-- Footer -->
        <footer>
             <a href= "mailto:hello@morphehome.com">Contact</a>
        </footer>
        <!-- ./Footer -->
    <script src="{{ asset('assets/dist/app.js') }}"></script>
</body>
</html>
