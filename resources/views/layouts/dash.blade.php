@include('includes.dash-header')
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
    <script>
    	$('.dropdown-toggle').dropdown()
    </script>

    
</body>
</html>
