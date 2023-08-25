<h3 class="text-white">{{ $footer_menu['title'] }}</h3>
<ul class="footer-menu text-gray">
    @foreach ($footer_menu['links'] as $link)
        <li>
            <a href="{{ $link['route'] !== '#' ? route($link['route']) : $link['route'] }}">
                {{ $link['text'] }}
            </a>
        </li>
    @endforeach
</ul>
