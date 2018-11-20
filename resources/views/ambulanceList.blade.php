@extends('master')


@section('navbar')
    @include('partials.sidebar')
@stop


@section('content')


    <div class="container-fluid">
            @if(!empty(session('message')))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif

        <p>
            <a style="margin-top: 10px" class="btn btn-info" href="{{route('addAmbulance')}}">Add Ambulance</a>
        </p>

        <table id="table" class=" table-bordered table-condensed">

            <thead>
            <tr>
                <th>Owner Name</th>
                <th>Owner Mobile</th>
                <th>Email</th>
                <th>Driver Name</th>
                <th>Driver Mobile</th>
                {{--<th>Driver NID</th>--}}
                <th>Ambulance</th>
                <th>Edit</th>
                <th>View</th>
        </table>

       {{-- {{$ambulances->links()}}--}}


    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal"aa data-target="#exampleModalCenter">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">.col-md-4</div>
                            <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
                            <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                                Level 1: .col-sm-9
                                <div class="row">
                                    <div class="col-8 col-sm-6">
                                        Level 2: .col-8 .col-sm-6
                                    </div>
                                    <div class="col-4 col-sm-6">
                                        Level 2: .col-4 .col-sm-6
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



@stop


@section('datatable')

    <script>

        $(document).ready( function () {
            $('#table').DataTable({
                proccessing:true,
                serverSide: true,
                ajax: '{!! route('datatables.data')!!}',
                columns:[
                    {data: 'ownername', name: 'ownername'},
                    {data: 'ownermobile', name: 'ownermobile'},
                    {data: 'email', name: 'email'},
                    {data: 'drivername', name: 'drivername'},
                    {data: 'ownermobile', name: 'ownermobile'},
                    {data: 'ambulancename', name: 'ambulancename'},
                    {data: 'id',

                        fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                            $(nTd).html("<a href='/edit/"+oData.id+"'>"+"Edit"+"</a>");
                        }
                    },

                    {data: 'id',
                        fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                            $(nTd).html("<a href='/viewambulacne/"+oData.id+"'>"+"View"+"</a>");
                        }

                    },

                ]
            });
        } );


    </script>
    @stop










