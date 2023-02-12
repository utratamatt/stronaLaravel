<!DOCTYPE HTML>
        <html>
            <head>
                <title>{{$title ?? "Strona Laravel"}}</title>
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            </head>
            <body>
            <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>{{$title ?? "Strona Laravel"}}</h1>
            </div>
        </div>
        <div class="row">
            @yield('menu')
        </div>
    </div>
    <hr />
    
    @yield('content')
    
    <script type="text/javascript" src="/js/materialize.min.js"></script>
                        <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var elems = document.querySelectorAll("select");
                            var instances = M.FormSelect.init(elems, {});
                        });
    </script>
	@yield('scripts')
    </body>
</html>