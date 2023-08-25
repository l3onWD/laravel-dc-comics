<ul class="header-menu">
    @foreach ($links as $link)
        <li class="{{ isset($link['submenu']) ? 'has-submenu' : '' }}">

            {{-- Main Link --}}
            <a href="{{ $link['route'] !== '#' ? route($link['route']) : $link['route'] }}"
                class="{{ Route::is($link['route']) ? 'active' : '' }}">
                {{ $link['text'] }}
                @if (isset($link['submenu']))
                    <i class="fas fa-caret-down text-blue"></i>
                @endif
            </a>

            {{-- Submenu --}}
            @if (isset($link['submenu']))
                @include('includes.components.header_submenu', ['sublinks' => $link['submenu']])
            @endif
        </li>
    @endforeach
</ul>
