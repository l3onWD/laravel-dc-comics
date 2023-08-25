<div class="dropmenu py-1">
    <button class="dropmenu-toggler" data-modal-target="{{ $dropmenu['id'] }}">
        {{ $dropmenu['title'] }} <i class="fas fa-caret-down"></i>
    </button>

    <ul id="{{ $dropmenu['id'] }}" class="dropmenu-content">
        @foreach ($dropmenu['links'] as $link)
            <li>
                <a href="{{ $link['route'] !== '#' ? route($link['route']) : $link['route'] }}">
                    {{ $link['text'] }}
                </a>
            </li>
        @endforeach
    </ul>

</div>
