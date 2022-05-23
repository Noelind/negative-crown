@props(['jsFile'])

@if ($jsFile=='article.js')
    <script src="{{ mix('/js/article.js') }}"></script>
@endif
