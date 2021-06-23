@extends('layouts.master_layouts')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Table</h4>
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">


                <div class="row"><div class="col-sm-12">
                <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 177.156px;">#</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 177.156px;">Name</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 177.156px;">Categorey</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 177.156px;">Author</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 177.156px;">publishin</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 177.156px;">Release</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 177.156px;">number</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 177.156px;">Image</th>

                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 287.25px;"><i class="fa fa-cogs" aria-hidden="true"></i></th>


                        </tr>
                        </thead>
                    <tbody>
                      <tr role="row" class="odd">
                 @foreach ($books as $book)
                      <td> {{$loop->index}}</td>
                            <td class="sorting_1">{{$book->name}}</td>

                            <td class="sorting_1">{{$book->categories->name}}</td>


                            <td class="sorting_1">{{$book->author->name}}</td>
                            <td class="sorting_1">{{$book->publishing->name}}</td>
                            <td class="sorting_1">{{$book->Release_Date}}</td>
                            <td class="sorting_1">{{$book->number}}</td>
                            <td class="sorting_1" ><img  src="{{Storage::url($book->image)}}" class="w-75"></td>





                            <td><a href="{{URl('EditeBook/'.$book->id)}}" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <a href="{{URl('deletebook/'.$book->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                             </tr>
                 @endforeach







                    </tbody>
                    <tfoot>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">

                </div>
                <div class="col-sm-12 col-md-7">


                  </div>

            </div>
            </div>
        </div>
    </div>
</div>




@endsection
