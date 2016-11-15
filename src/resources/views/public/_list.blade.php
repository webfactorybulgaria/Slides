<div class="swiper-wrapper">
@foreach ($items as $slide)
    @include('slides::public._list-item')
@endforeach
</div>
<div class="swiper-pagination swiper-pagination-white"></div>
<div class="swiper-button-prev swiper-button-white"></div>
<div class="swiper-button-next swiper-button-white"></div>
