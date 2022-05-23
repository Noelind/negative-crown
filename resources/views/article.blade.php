<x-layout>

<x-article.article-meta :author="'Yota Bakopoulou'"/>

<x-article.article-body/>

<div class="grid gap-32 grid-cols-1 xsm:grid-cols-2 sm:grid-cols-3">
    @for($i = 1; $i < 5; $i++)
    <x-article.simple-article />
    @endfor
    </div>

<x-layout.scripts :jsFile="'article.js'"/>

</x-layout>
