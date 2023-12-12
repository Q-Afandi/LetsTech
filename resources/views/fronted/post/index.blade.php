@extends('layout.main')

<div class="bg-danger py-4">
    <div class="container">
        <div class="row">
            <div  class="col-md-12">

                @foreach ($all_category as $all_cate_item)

                <div class="item">
                    <a href="" class="text-decoration-none">
                        <div class="card">
                            <img src="{{ asset('upload/category/'.$all_cate_item->image) }}" alt="Image">
                            <div class="card-body">
                                <h4 class="text-dark"2>{{ $all_cate_item->name }}</h4>
                        </div>
                    </a>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>