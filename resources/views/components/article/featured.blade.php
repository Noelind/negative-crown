<article class="flex flex-col lg:flex-row md:items-center lg:items-start my-10 lg:gap-28">
    <a href="article" class="lg:shrink-0">
        <picture class="">
            <source media="(max-width: 399px)" srcset="/storage/images/blog-img-mb.avif" type="image/avif">
            <source media="(min-width: 400px)" srcset="/storage/images/blog-img-ds.avif" type="image/avif">

            <img class="mb-5 eyelid-fx ease-in-out duration-1500 grayscale-50 hover:grayscale-0 article-img-shadow"
                src="/storage/images/blog-img-mb.jpg" alt="BLOG Image" width="600" height="400" sizes="(max-width: 399px) 350px, (min-width: 400px) 600px">

        </picture>
    </a>


    <div class="flex flex-col justify-between">
        <a href="article">
            <h2 class="mb-5 lg:mb-8 text-3xl lg:text-4xl font-medium leading-11 md:leading-13 dark:text-white transition ease-in-out duration-500">Organising my bookshelf for the millionth time</h2>
        </a>
        {{-- <span class="mb-5 text-xl lg:text-xl font-normal md:tracking-widest-plus text-green-700">new read</span> --}}
        <div class="flex flex-row justify-between lg:mb-12">
            <span class="text-xl lg:text-xl font-normal font-color text-neutral-600 font-serif dark:text-neutral-400 transition ease-in-out duration-500">Published <strong>3 hours ago</strong></span>
            <span class="block lg:hidden vertical-line"></span>
            <div class="flex flex-row justify-between gap-10">
                <x-article.category />
            </div>
        </div>
        <p class="hidden text-2xl font-light leading-11.5 obscure-text relative lg:line-clamp-10 dark:text-white transition ease-in-out duration-500">Τα παιδιά τις τελευταίες δεκαετίες έχουν γίνει ένα τοτέμ στην κοινωνία μας και στις λοιπές δυτικές κοινωνίες: σε μια «προοδευτική» οπτική γωνία της εξέλιξής μας, τα παιδιά ως μέλλον σηματοδοτούν μια αυταξία. Ειδικά όταν είναι κάπως λίγα και επενδύουμε (ψυχικά και οικονομικά) πολλά σε αυτά. Δεν είναι επίσης απολύτως σίγουρο ότι οι αντιδράσεις στην αστυνομική επέμβαση στο Τζόκερ είναι αντιπροσωπευτικές της κοινωνικής αντίληψης. Τα παιδιά τις τελευταίες δεκαετίες έχουν γίνει ένα τοτέμ στην κοινωνία μας και στις λοιπές δυτικές κοινωνίες: σε μια «προοδευτική» οπτική γωνία της εξέλιξής μας, τα παιδιά ως μέλλον σηματοδοτούν μια αυταξία. Ειδικά όταν είναι κάπως λίγα και επενδύουμε (ψυχικά και οικονομικά) πολλά σε αυτά. Δεν είναι επίσης απολύτως σίγουρο ότι οι αντιδράσεις στην αστυνομική επέμβαση στο Τζόκερ είναι αντιπροσωπευτικές της κοινωνικής αντίληψης.</p>
    </div>

</article>
