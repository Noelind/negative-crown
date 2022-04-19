<header id="site-header">
    <div class="flex justify-center border-b border-solid">
        <div class="container flex justify-center py-12" id="horizontal-header">
            <h1>
                <a href="{{ route('home')}}">
                    <img src="{{ asset('assets/icons/tcon-logo.svg')}}" alt="The Crown of Negativity Logo">
                </a>
            </h1>
        </div>
    </div>
    <div class="flex bg-white border-b border-solid -rotate-90 -translate-x-1/2 w-vscreen top-1/2 origin-top-center fixed z-10 pr-6">
        <div class="container py-7" id="vertical-header">
            <nav class="flex items-center justify-end gap-16">

            <ul class="text-xl flex flex-row-reverse gap-20" id="vertical-menu">
                    <x-menu.link :text="'crown thoughts'" :href="'/crown-thoughts'"/>
                    <x-menu.link :text="'books'" :href="'/books'"/>
                    <x-menu.link :text="'comics'" :href="'/comics'"/>
                    <x-menu.link :text="'photo gallery'" :href="'/photo-gallery'"/>
                </ul>
                <img class="rotate-90" src="{{ asset('assets/icons/user.svg')}}" alt="User Avatar">
            </nav>
        </div>
    </div>
</header>
