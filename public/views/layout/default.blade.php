<!DOCTYPE html>
<html lang="en" ng-app="designz">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="img/logo.png">
		<title>Designz | Corporate Gifting</title>
		<!-- Bootstrap core CSS -->
		{{ HTML::style('css/bootstrap.css') }}

        {{ HTML::style('css/sticky-footer-navbar.css') }}


        {{ HTML::style('css/styles.css') }}

        {{ HTML::script('js/lib/jquery.min.js') }}
		{{ HTML::script('js/lib/angular.min.js') }}		
        {{ HTML::script('js/lib/bootstrap.min.js') }}
        {{ HTML::script('js/lib/angular-scroll.min.js') }}

		
        {{ HTML::script('js/app.js') }}
        {{ HTML::script('js/controllers/global.js') }}
        {{ HTML::script('js/main.js') }}
		
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- <link href='http://fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'> -->
	</head>
	<body ng-controller="globalController">
		
		

		
			@if(Session::has('global'))
				<div class="alert alert-success">{{ Session::get('global') }}</div>
			@endif

			@yield('content')
		<div id="footer">
			<div class="container">
				<p class="text-muted text-center">Designz &copy; 2014. All Rights Reserved.</p>
			</div>
		</div>


		
        <script>

        </script>

	</body>
</html>