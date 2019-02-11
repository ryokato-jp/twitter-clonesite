<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
            メニューバー
        @show

        <div>
            @yield('content')
        </div>
        <!-- <div>
            @yield('footer')
        </div> -->

    </body>
</html>
