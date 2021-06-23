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
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 287.25px;"><i class="fa fa-cogs" aria-hidden="true"></i></th>
                        </tr>
                        </thead>
                    <tbody>
                      <tr role="row" class="odd">
                 @foreach ($authors as $author)
                      <td> {{$loop->index}}</td>
                            <td class="sorting_1">{{$author->name}}</td>
                           <td><a href="{{URl('EditAuthor/'.$author->id)}}" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <a href="{{URl('deleteAuthor/'.$author->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                             </tr>
                 @endforeach





                        </tr>

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
