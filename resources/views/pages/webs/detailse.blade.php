@extends('layouts.webs.master_layouts')


@section('content')
<div class="container">
    <div class="row  mt-5">
        <div class="col-md-5 ">
            <span style="display: inline-block; position: relative; overflow: hidden;" class="andro_product-single-zoom"><div class="andro_product-single-thumb" style="display: block;">
                <img src="{{ Storage::Url($book->image) }}" alt="product">
            </div>
            <img  alt="" src="{{ Storage::Url($book->image) }}" class="zoomImg" style="position: absolute; top: -25.8585px; left: -45.1742px; opacity: 0; width: 500px; height: 420px; border: none; max-width: none; max-height: none;"></span>

        </div>
        <div class="col-md-7">
            <div class="andro_product-single-content">


                <h3>{{ $book->name }} </h3>
                 <p class="andro_product-excerpt">{{ $book->descriptaion }}</p>

                <ul class="andro_product-meta">
                    <li>
                        <span>Categories: </span>
                        <div class="andro_product-meta-item">
                            <a href="#">{{ $book->categories->name }}</a>
                        </div>
                    </li>
                    <li>
                        <span>Release Date: </span>
                        <div class="andro_product-meta-item">
                         <span>{{ $book->Release_Date }}</span>
                        </div>
                    </li>
                    <li>
                        <span>number: </span>
                        <div class="andro_product-meta-item">
                            <span>{{ $book->number }}</span>
                        </div>
                    </li>

                    <li>
                        <span>author: </span>
                        <div class="andro_product-meta-item">
                            <span>{{ $book->author->name }}</span>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</div>
@endsection
