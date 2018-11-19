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

                {{--<th>AC </th>
                <th>Number Plate</th>
                <th>Location</th>
                <th>Hospital</th>
                <th>Action</th>
            </tr>
            </thead>

           {{-- <tbody>
            @foreach($ambulances as $ambulance)
                <tr>
                    <td>{{$ambulance->ownername}}</td>
                    <td>{{$ambulance->ownermobile}}</td>
                    <td>{{$ambulance->email}}</td>
                    <td>{{$ambulance->drivername}}</td>
                    <td>{{$ambulance->drivermobile}}</td>
                    --}}{{--<td>{{$ambulance->drivernid}}</td>--}}{{--
                    <td>{{$ambulance->ambulancename}}</td>
                    <td>{{$ambulance->type}}</td>
                    <td>{{($ambulance->acstatus) ==1 ?"AC" :"Non AC"}}</td>
                    <td>{{$ambulance->numberplate}}</td>
                    <td>{{$ambulance->location}}</td>
                    <td>{{$ambulance->hospital}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('edit',$ambulance->id)}}">Update</a>

                        <form action="{{route('deleteAmbulanceInfo',$ambulance->id)}}" method="post">
                            @csrf
                            @method('DELETE')

                            <button style="color: #ffffff" class="btn btn-danger btn-block" type="submit">Delete</button>
                        </form>

                    </td>

                </tr>
            @endforeach
            </tbody>--}}
        </table>

       {{-- {{$ambulances->links()}}--}}

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

                ]
            });
        } );


    </script>
    @stop










