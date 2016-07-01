@include('partials._head')
<body id="app-layout">
    @include('partials._nav')

    @yield('content')

    @include('partials._footer')
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" crossorigin="anonymous"></script>
    
    {{ Html::script('js/custom.js') }}
    
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57618a93aece0be1"></script>


</body>

</html>
