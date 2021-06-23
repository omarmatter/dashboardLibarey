@extends('layouts.master_layouts')



@section('content')
    <div class="col-lg-4 col-sm-6">
        <div class="card gradient-1">
            <div class="card-body">
                <h3 class="card-title text-white">books</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{ $book }}</h2>

                </div>
                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span> --}}
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="card gradient-2">
            <div class="card-body">
                <h3 class="card-title text-white">Authores</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{ $author }}</h2>
                </div>
                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span> --}}
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="card gradient-3">
            <div class="card-body">
                <h3 class="card-title text-white">Categoreys</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{ $categorey }}</h2>
                </div>
                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span> --}}
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="card gradient-4">
            <div class="card-body">
                <h3 class="card-title text-white">publish</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{ $publish }}</h2>
                </div>
                {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span> --}}
            </div>
        </div>
   
</div>

@endsection
