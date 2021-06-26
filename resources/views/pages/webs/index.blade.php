@extends('layouts.webs.master_layouts')

@section('content')
<div class="section section-padding pt-0">
    <div class="container">
        <div class="row mt-5">
         @foreach ($books as $book )
         <div class="col-lg-6">
            <!-- Product Start -->
            <div class="andro_product andro_product-list">

                <div class="andro_product-thumb">
                    <a href="product-single.html"><img src="{{ Storage::Url($book->image) }}" alt="product"></a>

                </div>
                <div class="andro_product-body">

                    <h5 class="andro_product-title"> <a href="product-single.html">{{ $book->name }}</a> </h5>
                    <p>{{ $book->descriptaion}}</p>
                    <div class="andro_product-footer">
                        <div class="btn-group">
                            <a href="{{URL('detailse/'. $book->id)  }}" class="andro_btn-custom btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product End -->
            <!-- Product Start -->

            <!-- Product End -->
        </div>
         @endforeach


        </div>
    </div>
</div>
@endsection
