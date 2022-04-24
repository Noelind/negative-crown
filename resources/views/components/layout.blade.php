<!DOCTYPE html>
<html lang="en">

<x-layout.head />
    <body>

        <x-layout.header />

        <div class="md:ml-[86px] mx-auto py-8 px-8">
            <div class="container mx-auto">
            {{$slot}}
            </div>
        </div>

        {{-- <x-layout.footer /> --}}
    </body>
</html>

