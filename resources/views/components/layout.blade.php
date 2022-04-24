<!DOCTYPE html>
<html lang="en">

<x-layout.head />
    <body>

        <x-layout.header />

        <div id="body" class="container mx-auto py-8 px-8">
            {{$slot}}
        </div>

        {{-- <x-layout.footer /> --}}
    </body>
</html>

