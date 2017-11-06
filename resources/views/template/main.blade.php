<!DOCTYPE html>
<html lang="es">
	<head>
		<title>@yield('title', 'TAXI')</title>

		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<link rel="shorcut icon" href="{{ asset('/img/icon.png') }}" type="image/png" sizes="16x16">

		<!-- Bootstrap CSS -->
		

	    <!-- Custom CSS -->
	    <link href="/css/styles.css" rel="stylesheet">
	    <link href="/css/app.css" rel="stylesheet">

	    <!--Bootstrap MAXCDN Custom Menu CSS-->
	    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet" integrity="sha384-Li5uVfY2bSkD3WQyiHX8tJd0aMF91rMrQP5aAewFkHkVSTT2TmD2PehZeMmm7aiL" crossorigin="anonymous">

	    <!--Custom Fonts-->
	    <!--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">-->

	    <!--Custom Icons-->
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	    <!-- Custom jQuery -->
	    <script src="/js/cubeimage.js"></script>

	    <!-- jQuery -->
	    <script src="/js/jquery.js"></script>

	    <!-- Bootstrap JavaScript -->
	    <script src="/js/bootstrap.min.js"></script>

	</head>
	<body>
		@yield('content')
	</body>
</html>
