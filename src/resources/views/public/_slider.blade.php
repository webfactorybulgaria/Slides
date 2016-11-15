<section class="swiper-container{{ (!empty($custom_class)) ? ' '.$custom_class : '' }}">
    @include('slides::public._list')
    <div class="tilt-front">
        <div class="tilt-back"></div>
    </div>
</section>
