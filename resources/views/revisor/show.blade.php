<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-6">
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
            <div class="col-6">
                <h1 class="text-white">{{ $article->title }}</h1>
                <p class="text-white">Caricato da: {{ $article->user->name }}</p>
                <div class="col-12 d-flex justify-content-around">
                    <form action="{{route('revisor.accept', compact('article'))}}" method="POST">
                        @csrf @method('PATCH')
                        <button type="submit" class="btn btn-success">Accetta</button>
                    </form>
                    <form action="{{route('revisor.reject', compact('article'))}}" method="POST">
                        @csrf @method('PATCH')
                        <button type="submit" class="btn btn-danger">Accetta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>






</x-layout>
