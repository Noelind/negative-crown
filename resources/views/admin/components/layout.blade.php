<!DOCTYPE html>
<html lang="en">


<x-admin::layout.head />

<body class="dark:bg-neutral-1000 transition-colors duration-500 ease-in-out">

	@if (!Route::is('admin-login'))
		<x-admin::layout.header />
	@endif

	<main id="swup-main" class="swupsition-fade">
		{{ $slot }}
	</main>

	{{-- Pulls from RegisterController if validation has passed. --}}
	{{-- Turn into component later. Maybe have a general x-flash components with different messages. --}}
	@if (session()->has('success'))
		<p>{{ session('success') }}</p>
		{{-- maybe show as sticky? --}}
	@endif
	{{-- <x-layout.footer /> --}}
</body>

</html>
