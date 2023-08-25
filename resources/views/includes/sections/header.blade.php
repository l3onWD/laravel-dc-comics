@php
    $links = config('data.header_menu');
    $dropmenu = config('data.dropmenu_links')['additional_sites'];
@endphp

<header id="main-header" class="bg-white">

    {{-- Header Top --}}
    <div class="header-top">
        <div class="container">
            <ul class="d-flex justify-content-end align-items-center">
                <li class="px-2">DC POWER<sup>SM</sup> VISA&reg;</li>
                <li class="px-2">
                    @include('includes.components.dropmenu', ['dropmenu' => $dropmenu])
                </li>
            </ul>
        </div>
    </div>

    {{-- Header Bottom --}}
    <nav class="header-bottom container">

        {{-- Logo --}}
        <a class="header-logo" href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}">
        </a>


        {{-- Menu --}}
        @include('includes.components.header_menu', compact('links'))


        {{-- Actions --}}
        <div class="header-actions">
            @include('includes.components.header_search')
        </div>
    </nav>
</header>
