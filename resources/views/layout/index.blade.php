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
    <meta property="og:url" content="@yield('url')" />
    <meta property="og:site_name" content="site_name" />
    <meta property="og:images" content="@yield('img')" />
    <meta property="og:image" content="@yield('img')" />
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
    <!------------------- CSS ------------------->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/fonts/gotham/fonts.css" rel="stylesheet">
    <link href="assets/css/common.css" rel="stylesheet">
    <link href="assets/css/header.css" rel="stylesheet">
    <link href="assets/css/footer.css" rel="stylesheet">
    <link href="assets/css/sort.css" rel="stylesheet">
    <link href="assets/css/card.css" rel="stylesheet">
    <link href="assets/css/form.css" rel="stylesheet">
    <link href="assets/css/runglac.css" rel="stylesheet">
    <link href="assets/css/simpleLightbox.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
        
    @yield('css')

    <style type="text/css">
        .alert-custom {
    padding: 15px 20px;
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    font-size: 16px;
    position: relative;
    transition: opacity 0.5s ease;
}
    </style>
    
</head>

<body>
    
    @yield('content')
    
    @include('layout.footer')

    <!-- JS
    ============================================ -->
    <!------------------- JS core------------------->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/simpleLightbox.min.js"></script>
    <script src="assets/js/custom.js?v=30"></script>
    
    @yield('js')

    @if (Session::has('success'))
    <div class="alert alert-success alert-custom" id="success-alert">
        {{ Session::get('success') }}
    </div>
@endif

    <script>
        setTimeout(function () {
            const alert = document.getElementById('success-alert');
            if (alert) {
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 500); // xóa khỏi DOM sau khi ẩn
            }
        }, 5000); // 5 giây
    </script>


    <!-- Admicro Tag Manager -->
    <script> (function(a, b, d, c, e) { a[c] = a[c] || [];
    a[c].push({ "atm.start": (new Date).getTime(), event: "atm.js" });
    a = b.getElementsByTagName(d)[0]; b = b.createElement(d); b.async = !0;
    b.src = "//deqik.com/tag/corejs/" + e + ".js"; a.parentNode.insertBefore(b, a)
    })(window, document, "script", "atmDataLayer", "ATME0DM1WTK12");</script>
    <!-- End Admicro Tag Manager -->

</body>

</html>