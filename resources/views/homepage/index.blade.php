<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts/head');

<body>
@include('layouts.header')
@include('homepage.new-articles')
<script src="/js/main.js"></script>
</body>

</html>
