<!DOCTYPE html>
<html lang="en">

<x-layout.head />
    <body class="dark:bg-neutral-1000 transition-colors ease-in-out duration-500">

        <x-layout.header />

        <div class="md:ml-[86px] mx-auto py-28 px-8">
            <div class="container mx-auto">
            {{$slot}}
            </div>
        </div>

        {{-- <x-layout.footer /> --}}
    </body>
</html>

