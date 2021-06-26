@extends('layouts.master_layouts')


@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="form-validation">
                <form class="form-valide" action="{{ URL('book/update/'.$book->id) }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="titel">title <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="title" value="{{ $book->name }}"  name="title" placeholder="Enter a title..">
                        </div>
                    </div>




                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-skill">Categorey <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <select class="form-control" id="val-skill" name="Categorey">

                              @foreach ($catogeries as  $catogery )
                                <option value="{{$catogery->id  }}"{{$catogery->name==$book->categories->name ?"selected":""  }}  >{{ $catogery->name }}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="publish">publish<span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <select class="form-control" id="publish" name="publish">
                                @foreach ($publishs as $publish )
                                <option value="{{$publish->id  }}"   {{$publish->name==$book->publishing->name ?"selected":""  }}>{{ $publish->name }}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="Author">Author <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <select class="form-control" id="Author" name="Author">
                                <option value="">Please select</option>
                                @foreach ($Authors as  $Author )
                                <option value="{{$Author->id  }}"{{$Author->name==$book->author->name ?"selected":""  }}>{{ $Author->name }}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="Release_Date" >Release Date <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" value="{{$book->Release_Date}}"  placeholder="2017-06-04" id="mdate" data-dtp="dtp_XzhwP" name="Release_Date">
                        </div>
                    </div>




                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="number">number <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="number" value="{{$book->number}}" name="number" placeholder="Enter a number relese..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="descriptaion">descriptaion <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="descriptaion" name="descriptaion"  value="{{$book->descriptaion}} placeholder="Enter a descriptaion..">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="image">image <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="file" class="form-control" id="image" name="image" placeholder="Enter a number relese..">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-lg-8 ml-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>




                </form>
            </div>
        </div>
    </div>
</div>

@endsection
