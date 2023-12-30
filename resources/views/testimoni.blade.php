@extends('layouts.main')

@section('container')
<!-- testimoni -->
<section id="testimoni">
<h1 class="text-center mt-5">Berbagai Cerita Dari #ReviewerGadget</h1>
        <div class="card__container swiper">
            <div class="card__content">
                <div class="swiper-wrapper">
                    <article class="card__article swiper-slide">
                        <div class="card">
                            <iframe class="rounded" style="height: 300px;"
                                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card">
                            <iframe class="rounded" style="height: 300px;"
                                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card">
                            <iframe class="rounded" style="height: 300px;"
                                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card">
                            <iframe class="rounded" style="height: 300px;"
                                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card">
                            <iframe class="rounded" style="height: 300px;"
                                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-next">
                <i class='bx bx-chevron-right'></i>
            </div>

            <div class="swiper-button-prev">
                <i class='bx bx-chevron-left'></i>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

@endsection
