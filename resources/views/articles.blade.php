<x-layout>

    <x-article.featured-article/>

    @for ($i = 0; $i < 6; $i++)

        <x-article.simple-article :number="$i"/><br>

    @endfor

</x-layout>
