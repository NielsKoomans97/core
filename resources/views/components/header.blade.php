<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @php
        $scripts = explode(',', $scriptSources);
        $css = explode(',', $cssSources);
    @endphp
    @foreach ($scripts as $script)
        <script src="{{ $script }}" defer></script>
    @endforeach
    @foreach ($css as $styling)
        <link rel="stylesheet" href="{{ $styling }}">
    @endforeach
</head>

<body>
