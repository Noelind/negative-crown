<x-layout>

<x-article.meta :author="'Yota Bakopoulou'"/>

<x-article.body/>

<div class="container mx-auto">
    <div class="grid gap-32 grid-cols-1 xsm:grid-cols-2 sm:grid-cols-3">
        @for($i = 1; $i < 5; $i++)
        <x-article.simple />
        @endfor
    </div>
</div>

</x-layout>
