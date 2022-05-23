<x-layout>

    <p class="text-center text-xl font-bold tracking-widest-plus text-neutral-600 my-32">Search results for: Organising</p>



        <div class="grid gap-32 grid-cols-1 xsm:grid-cols-2 sm:grid-cols-3">
        @for($i = 1; $i < 5; $i++)
        <x-article.simple-article />
        @endfor
        </div>

</x-layout>
