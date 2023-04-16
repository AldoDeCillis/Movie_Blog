<x-layout>

<div class="row justify-content-center">
    <div class="col-12 text-center my-5">
        <h1 class="text-white">{{$article->title}}</h1>
    </div>
    <div class="col-4">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
              </div>
            </div>
          </div>
    </div>
</div>

</x-layout>