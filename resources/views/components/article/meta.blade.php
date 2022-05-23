@props(['author'])

<div class="md:ml-[86px] flex flex-row dark:text-white transition ease-in-out duration-500">
    <div class="basis-1/2">
        <picture class="">
            <source media="(max-width: 399px)" srcset="/storage/images/article-hero-img.avif" type="image/avif">
            <source media="(min-width: 400px)" srcset="/storage/images/article-hero-img.avif" type="image/avif">

            <img class="mb-5 ease-in-out duration-1500 grayscale-50 hover:grayscale-0"
                src="/storage/images/article-hero-img.png" alt="BLOG Image" width="1000" height="800" sizes="(max-width: 399px) 350px, (min-width: 400px) 600px">

        </picture>
    </div>
    <div class="basis-1/2 flex flex-col justify-center items-center">
        <div class="max-w-5xl">
            <div class="flex flex-row items-center lg:my-10 justify-between">
                <div class="flex flex-row items-center">
                    <img class="rounded-full" src="/storage/images/avatar.png" alt="User Avatar" width="50">
                    <span class="lg:text-2xl lg:ml-5">Yota Bakopoulou</span>
                </div>
                <x-article.category />
            </div>
            <h1 class="lg:text-4xl font-bold leading-14">Organising my bookshelf for the millionth time</h1>
        </div>

    </div>
  </div>
<div class="flex flex-row ">


</div>
