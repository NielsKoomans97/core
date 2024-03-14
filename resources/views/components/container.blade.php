<x-header />
@php
    $requestUri = substr($_SERVER['REQUEST_URI'],1);

    $className = empty($requestUri) ? 'index' : $requestUri;
@endphp
<div class="content {{ $className }}">
    @yield('content')
</div>
<x-footer />