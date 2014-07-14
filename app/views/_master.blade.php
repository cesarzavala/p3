
<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<!-- Bootstrap additions -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>		
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- End of Bootstrap additions -->

	<link rel="stylesheet" type="text/css" href="css/styles.css"> 
	<link rel="icon" type="image/ico" href="images/favicon.ico">

	@yield('head')

</head>
<body class="container">
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
			<h1>Developer's best friend</h1>
	  </div>
	</nav>
	@yield('content')
</body>
</html>