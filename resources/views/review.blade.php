@extends('layouts.main')

@section('container')
<!-- review -->
<section id="testimoni" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-10 ">
                    <h2 class="font-bold text-primary text-2xl mb-4 sm:text-4xl lg:text-3xl">Review</h2>
                    <p class="font-medium text-md text-black md:text-lg">ReviewerGadget #UpGadget</p>
                </div>
            </div>

            <div class="gap-1 lg:grid lg:grid-cols-3 bg-white">
                <div class="w-full mx-auto my-5 block max-w-sm p-6 ">
                    <div class="flex items-center justify-center">
                        <iframe width="300" height="200" 
                            src="https://www.youtube.com/embed/0_DYKoiYZcc?si=bo_r9SxYmhWaw7c-" 
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="w-full mx-auto my-5 block max-w-sm p-6 ">
                    <div class="flex items-center justify-center">
                        <iframe width="300" height="200" 
                        src="https://www.youtube.com/embed/1apNQbCKY1c?si=dCSAOM9-2pIzlcL1" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="w-full mx-auto my-5 block max-w-sm p-6 ">
                    <div class="flex items-center justify-center">
                        <iframe width="300" height="200" 
                        src="https://www.youtube.com/embed/aAeSHllnhZs?si=6DyHENuQ2ewT1RDC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
        



@endsection
