<!DOCTYPE html>
<html lang="en">
<!-- SCRIPT PAGE BERISI LINK DAN SCRIPT -->
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>AKAR</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <!-- <link rel="shortcut icon" href="/tema/images/logo.png" type="image/x-icon" /> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/tema/css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('/tema/style.css') }}">    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{ asset('/tema/css/versions.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('/tema/css/responsive.css') }}">
    <!-- Custom CSS -->
     <link rel="stylesheet" href="{{ asset('/tema/css/custom.css') }}">         
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/ material-design-iconic-font.min.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

      <!-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

</head>
 <!-- ALL JS FILES -->
 <body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">
    
    @yield('content')  
    <script src="{{ asset('/tema/js/all.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('/tema/js/custom.js') }}"></script>
	<script src="{{ asset('/tema/js/zenith.js') }}"></script>
    <!-- JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/lte/plugins/bootstrap/js/bootstrap.min.js') }}">
    <script src="{{ asset('js/main.js') }}"></script>
	<script>
		$('#default').zenith({
			layout: 'default' , 
			slideSpeed: 450, 
			autoplaySpeed: 2000
		});
	</script>
@yield('day')
</body>
</html>