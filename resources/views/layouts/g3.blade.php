<html>

<head>
    @include('includes.head')
</head>

<body class='col-lg-12 col-md-12 col-sm-12 col-12 master-page-wrap no-padding'>
    <div class='col-12 no-padding site-header'>
         @include('includes.header')
    </div>
    <div class='col-12 no-padding inner-wrap'>

        <div class='col-lg-12 col-md-12 col-sm-12 col-12 page-container no-padding'>

            @yield('content')

        </div>

        @include('includes.footer')
    </div>
</body>

</html>