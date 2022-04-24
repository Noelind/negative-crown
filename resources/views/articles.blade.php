<x-layout>

        <x-article.featured-article />

        <p class="text-center text-xl font-bold tracking-widest-plus text-slate-500 my-16">down the rabbit hole...</p>

        <div class="grid gap-32 grid-cols-1 xsm:grid-cols-2 sm:grid-cols-3">
        @for($i = 1; $i < 5; $i++)
        <x-article.simple-article />
        @endfor
        </div>

</x-layout>
