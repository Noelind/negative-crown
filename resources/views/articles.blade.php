<x-layout>
    <div class="md:ml-[86px] mx-auto md:pt-28 px-8">
        <div class="container mx-auto">
            <x-article.featured />

            <p class="text-center text-xl font-bold tracking-widest-plus text-neutral-600 my-32 dark:text-neutral-400 transition ease-in-out duration-500">comic strip</p>

            <p class="text-center text-xl font-bold tracking-widest-plus text-neutral-600 my-32 dark:text-neutral-400 transition ease-in-out duration-500">down the rabbit hole...</p>

            <div class="grid gap-32 grid-cols-1 xsm:grid-cols-2 sm:grid-cols-3">
            @for($i = 1; $i < 5; $i++)
            <x-article.simple />
            @endfor
            </div>
        </div>
    </div>

</x-layout>
