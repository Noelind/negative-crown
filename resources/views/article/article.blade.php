<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')

<body>
@include('layouts.header')
<article class="article-container">
    <img alt="Article Image" src="{{ asset('/assets/articles/article01/article-main-image.jpg') }}">
    <?= $article_content; ?>
</article>
</main>
</body>

</html>