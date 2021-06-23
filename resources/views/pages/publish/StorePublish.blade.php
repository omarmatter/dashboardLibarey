@extends('layouts.master_layouts')



@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="form-validation">
                <form class="form-valide" novalidate="novalidate" action="{{ URL('publish/store') }} " method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-name">name <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-name" name="name" placeholder="Enter a name..">

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
