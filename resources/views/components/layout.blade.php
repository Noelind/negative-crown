<!DOCTYPE html>
<html lang="en">

<x-layout.head />
    <body>

        <x-layout.header />

        <div class="container mx-auto my-32">
            {{$slot}}
        </div>

        <x-layout.footer />
    </body>
</html>

