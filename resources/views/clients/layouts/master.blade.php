<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Home 02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	@include('clients.layouts.css')

</head>
<body class="animsition">
	
	<!-- Header -->
    @include('clients.layouts.menu')

	<!-- Sidebar -->
    @include('clients.layouts.menu_verticale')

    @yield('content')

	<!-- Footer -->
    @include('clients.layouts.footer')


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
@include('clients.layouts.js')

</body>
</html>