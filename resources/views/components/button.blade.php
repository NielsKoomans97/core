@if ($type == 'link')
    <a class="{{ $class }} {{ $direction }}" href="{{ $link }}">
        @if (!empty($icon) && $direction == 'icon-first')
            <i class="fas {{ $icon }}"></i>
        @endif
        {{ $slot }}
        @if (!empty($icon) && $direction == 'icon-last')
            <i class="fas {{ $icon }}"></i>
        @endif
    </a>
@elseif ($type == 'button')
    <button class="{{ $class }} {{ $direction }}" onclick="{{ $event }}">
        @if (!empty($icon) && $direction == 'icon-first')
            <i class="fas {{ $icon }}"></i>
        @endif
        {{ $slot }}
        @if (!empty($icon) && $direction == 'icon-last')
            <i class="fas {{ $icon }}"></i>
        @endif
    </button>
@endif
