@php
    $footer_menues = config('data.footer_menues');
    $social_links = config('data.social_links');
@endphp

<footer>
    <nav class="footer-top py-5">
        <div class="container">

            <div class="footer-row mb-3">
                <div class="footer-col">

                    {{-- Footer Menu --}}
                    <div class="mb-2">
                        @include('includes.components.footer_menu', ['footer_menu' => $footer_menues[0]])
                    </div>

                    {{-- Footer Menu --}}
                    @include('includes.components.footer_menu', ['footer_menu' => $footer_menues[1]])

                </div>

                <div class="footer-col">
                    {{-- Footer Menu --}}
                    @include('includes.components.footer_menu', ['footer_menu' => $footer_menues[2]])
                </div>

                <div class="footer-col">
                    {{-- Footer Menu --}}
                    @include('includes.components.footer_menu', ['footer_menu' => $footer_menues[3]])
                </div>
            </div>

            <p class="text-gray">All Site content TM ad &copy; 2020 DC Entertainment, unless otherwise <a href="#"
                    class="text-blue">noted here</a>. All rights reserved. <a href="#" class="text-blue">Cookies
                    Settings</a></p>
        </div>

    </nav>


    <div class="footer-bottom bg-darkgray py-5">

        <div class="container">

            <a href="#" class="btn btn-outline-primary btn-big">SIGN-UP NOW!</a>

            {{-- Social Bar --}}
            @include('includes.components.social_bar', ['socials' => $social_links])
        </div>
    </div>
</footer>
