<!DOCTYPE html>
<html lang="en">


<x-admin::layout.head />

<body class="dark:bg-neutral-1000 transition-colors duration-500 ease-in-out">

	<x-admin::layout.header />
	<main id="swup-main" class="swupsition-fade">
		{{ $slot }}
	</main>
	{{-- <x-layout.footer /> --}}
</body>

</html>
