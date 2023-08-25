<ul class="header-submenu">
    @foreach ($sublinks as $sublink)
        <li>
            <a
                href="{{ $sublink['route'] !== '#' ? route($sublink['route']) : $sublink['route'] }}">{{ $sublink['text'] }}</a>
        </li>
    @endforeach
</ul>
