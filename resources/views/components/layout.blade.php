@props(['categories' => '.'])

<!DOCTYPE html>
<html lang="en">

<x-layout.head />

<body class="dark:bg-neutral-1000 transition-colors duration-500 ease-in-out">

	<x-layout.header :categories="$categories" />
	<main id="swup" class="swupsition-fade">
		{{ $slot }}
	</main>
	{{-- <x-layout.footer /> --}}
</body>

</html>
