<nav class="social-bar">
    <h3 class="text-blue mb-0">Follow Us</h3>

    <ul>
        @foreach ($socials as $social)
            <li>
                <a href="{{ $social['url'] }}"><i class="{{ $social['icon_class'] }}"></i></a>
            </li>
        @endforeach
    </ul>
</nav>
