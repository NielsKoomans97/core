@php
    $cssConfig = json_decode(file_get_contents('resources/config/css.json'));
    $scriptConfig = json_decode(file_get_contents('resources/config/scripts.json'));

    $css = '';
    $js = '';

    foreach($cssConfig as $item){
        $css .= ', ' . $item;
    }

    foreach($scriptConfig as $item){
        $js .= ', ' . $item;
    }
@endphp

<x-header script-sources="{{ $js }}" css-sources="{{ $css }}" />
<div class="content ">
    @yield('content')
</div>
<x-footer />