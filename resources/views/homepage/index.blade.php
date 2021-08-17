<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts/head');

<body>
@include('layouts.master-layout')
@include('homepage/new-articles')

</body>

</html>
