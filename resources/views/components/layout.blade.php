<!DOCTYPE html>
<html lang="en">

<x-layout.head />
    <body class="dark:bg-neutral-1000 transition-colors ease-in-out duration-500">

        <x-layout.header />

        <main id="swup" class="swupsition-fade">
            {{$slot}}
        </main>
        {{-- <x-layout.footer /> --}}
    </body>
</html>

