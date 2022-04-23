<x-layout>

    <x-article.featured-article />
    <p class="text-center text-xl font-bold tracking-widest-plus text-slate-500 my-32">down the rabbit hole...</p>
    <div class="grid gap-80 grid-cols-3 ">
        @for ($i = 1; $i < 5; $i++)
            <x-article.simple-article :image="$i"/>
        @endfor
        @for ($i = 1; $i < 5; $i++)
        <x-article.simple-article :image="$i"/>
    @endfor
    </div>

</x-layout>
