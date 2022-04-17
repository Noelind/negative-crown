<x-layout>

    <x-article.featured-article />
    <div class="flex flex-row">
        @for($i = 0; $i < 6; $i++)

            <x-article.simple-article :number="$i" /><br>

        @endfor
    </div>

</x-layout>
