<!doctype html>
<html>
<head>
    <!-- seo -->
    <base href="{{asset('')}}">
    <title>@yield('title')</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" itemprop="keywords" content="@yield('keywords')" />
    <meta name="news_keywords" content="@yield('keywords')" />
    <meta name="robots" content="@yield('robots')"/>
    <link rel="shortcut icon" href="data/images/{{$setting->favicon}}" />
    <link rel="canonical" href="@yield('url')"/>
    <link rel="alternate" href="{{asset('')}}" hreflang="vi-vn" />
    <!-- and seo -->
    <!-- og -->
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="@yield('url')"/>
    <meta property="og:site_name" content="site_name"/>
    <meta property="og:images" content="@yield('img')"/>
    <meta property="og:image" content="@yield('img')"/>
    <meta property="og:image:alt" content="@yield('title')" />
    <!-- and og -->
    <!-- twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <!-- and twitter -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="article:author" content="admin" />

    <!-- CSS ========================= -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="assets/dist/fullpage.css" />
    <link rel="stylesheet" type="text/css" href="assets/examples.css" />
    <link rel="stylesheet" type="text/css" href="assets/custom.css" />
    <link rel="stylesheet" type="text/css" href="assets/common.css" />
    <link rel="stylesheet" type="text/css" href="assets/runglac.css" />
    
    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" type="text/css" href="assets/responsive.css" />

    @yield('css')


    <!-- Admicro Tag Manager -->
    <script> (function(a, b, d, c, e) { a[c] = a[c] || [];
    a[c].push({ "atm.start": (new Date).getTime(), event: "atm.js" });
    a = b.getElementsByTagName(d)[0]; b = b.createElement(d); b.async = !0;
    b.src = "//deqik.com/tag/corejs/" + e + ".js"; a.parentNode.insertBefore(b, a)
    })(window, document, "script", "atmDataLayer", "ATMMKHNG86M91");</script>
    <!-- End Admicro Tag Manager -->


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X04YXSYSTF"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-X04YXSYSTF');
    </script>

    <!-- TikTok Pixel Code Start -->
<script>
!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};


  ttq.load('D36GSUJC77U6IE15KRHG');
  ttq.page();
}(window, document, 'ttq');
</script>
<!-- TikTok Pixel Code End -->
    
</head>

<body>
    <div class="body-overlay"></div>
    <div class="main-wrapper">

        @include('layout.header')
        @yield('content')
        @include('layout.footer')
    
    </div>

    <!-- JS ============================ -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script type="text/javascript" src="assets/dist/fullpage.js"></script>
    <script type="text/javascript" src="assets/examples.js"></script>
    <script type="text/javascript" src="assets/custom.js"></script>
    
    @yield('js')

    @if (Session::has('success'))
    <div class="alert alert-success">
    {{ Session::get('success') }}
    </div>
    @endif

</body>

</html>