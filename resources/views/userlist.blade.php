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
                <th>Email</th>
                <th>Edit</th>
        </table>


    </div>

@stop


@section('datatable')

    <script>

        $(document).ready( function () {
            $('#table').DataTable({
                proccessing:true,
                serverSide: true,
                ajax: '{!! route('userslistajax')!!}',
                columns:[
                    {data: 'id', name: 'id'},
                    {data: 'email', name: 'email'},

                    {data: 'id',

                        fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                            $(nTd).html("<a href='/edit/"+oData.id+"'>"+"Edit"+"</a>");
                        }

                    },

                ]
            });
        } );


    </script>
@stop










