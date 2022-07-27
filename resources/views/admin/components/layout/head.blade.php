<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/admin.css') }}" rel="stylesheet">

	{{-- Prevent flash of Default Light Theme --}}
	<script>
	 if (localStorage.theme) document.documentElement.classList.add(localStorage.theme);
	</script>

	<script async src="{{ asset('js/admin.js') }}"></script>
	<title>Negative Crown Admin</title>
</head>
