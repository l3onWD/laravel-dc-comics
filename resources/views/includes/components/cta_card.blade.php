<a href="{{ $cta['route'] !== '#' ? route($cta['route']) : $cta['route'] }}" class="cta-card">
    <img src="{{ Vite::asset('resources/img/' . $cta['img_name']) }}" alt="{{ $cta['text'] }}">
    <h3>{{ $cta['text'] }}</h3>
</a>
