@extends('layouts.master')
@section('title', 'Customer Form')
@section('content_head','Customers List')
@section('content')

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Number</th>
            <th>Address</th>
            <th>Email</th>
            <th>Discription</th>
            <th>Photo</th>
            <th>Added_at</th>
            <th>Updded_at</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->number }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->discription }}</td>
                <td><img src="{{ asset('storage/picture/'.$customer->photo) }}" alt="no image"
                         title="" class="img-responsive img-thumbnail" style="width: 30px;"></td>
                <td>{{ \Carbon\Carbon::parse($customer->created_at)->format('d-M-Y')  }}</td>
                <td>{{ \Carbon\Carbon::parse($customer->updated_at)->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('customer.edit', $customer->id) }}" class="btn-primary"><i class="fas fa-edit"></i></a> |
                    {{ Form::open(['route' => ['customer.update', $customer->id], 'method'=>'delete']) }}
                    <button type="submit" class="btn btn-sm btn-danger" style="margin-top: -34px !important;
margin-left: 26px !important;"><i class="fas fa-trash-alt" ></i></button>
                {{ Form::close() }}
            </tr>
        @endforeach
        </tbody>
    </table>
    @if(Session::has('success'))
        <script>
            Swal.fire(
                'Successful!',
                '{{ Session::get("success") }}',
                'success'
            )
        </script>
    @endif
    @if(Session::has('error'))
        <script>
            Swal.fire(
                'Worng!',
                '{{ Session::get("error") }}',
                'error'
            )
        </script>
    @endif
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endsection
