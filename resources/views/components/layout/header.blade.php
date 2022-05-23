<header id="site-header" class="flex flex-row justify-between md:justify-center items-center px-8 py-8 md:ml-[86px] border-b dark:border-neutral-600 duration-500">
    <h1>
        <a href="{{ route('home') }}">
            <x-layout.icons :iconChoice="'logo-mb'" class="md:hidden" />
            <x-layout.icons :iconChoice="'logo-ds'" class="hidden md:block" />
        </a>
    </h1>
    <x-layout.icons :iconChoice="'burger-menu'" class="md:hidden" />
    <div class="hidden md:flex fixed left-0 -rotate-90 -translate-x-1/2 w-vscreen top-1/2 origin-top-center z-10 pr-6 bg-white border-b border-solid dark:border-neutral-600 dark:bg-neutral-1000 dark:text-white transition ease-in-out duration-500 ">
        <div class="container py-7" id="vertical-header">
            <nav class="flex items-center justify-end gap-16">
                <ul class="text-xl flex flex-row-reverse gap-20" id="vertical-menu">
                    <x-menu.link :text="'crown thoughts'" :href="'/crown-thoughts'" />
                    <x-menu.link :text="'books'" :href="'/books'" />
                    <x-menu.link :text="'comics'" :href="'/comics'" />
                    <x-menu.link :text="'photo gallery'" :href="'/photo-gallery'" />
                    <li class="theme-switcher-mob">

                    </li>
                </ul>
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" class="hidden" />
                        <x-layout.icons :iconChoice="'theme'" class="md:hidden" />
                    </label>
                </div>
            </nav>
        </div>
    </div>
</header>
