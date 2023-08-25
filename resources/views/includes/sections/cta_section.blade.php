<div class="bg-blue py-5">
    <div class="container">
        <div class="cta-deck">
            @foreach ($cta_cards as $cta)
                @include('includes.components.cta_card', ['cta' => $cta])
            @endforeach
        </div>
    </div>
</div>
