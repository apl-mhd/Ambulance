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
                <th>Id</th>
                <th>From</th>
                <th>To</th>
                <th>Date</th>
                <th>Action</th>
        </table>


    </div>

@stop


@section('datatable')

    <script>

        $(document).ready( function () {
            $('#table').DataTable({
                proccessing:true,
                serverSide: true,
                ajax: '{!! route('sendrequestajax')!!}',
                columns:[
                    {data: 'id', name: 'id'},
                    {data: 'from', name: 'from'},
                    {data: 'to', name: 'to'},
                    {data: 'requestdate', name: 'requestdate'},


                    {data: 'id',
                        fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                            $(nTd).html("<a href='/approve/"+oData.id+"'>"+"<button class='btn btn-success'>Approve</button>"+"</a>");
                        }

                    },

                ]
            });
        } );


    </script>
@stop










