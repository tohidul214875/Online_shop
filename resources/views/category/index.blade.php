@extends('layouts.master')
@section('title', 'Products Form')
@section('content_head','Products List')
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
            <th>label</th>
            <th>Discription</th>
            <th>Added_at</th>
            <th>Updded_at</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datas as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->lable }}</td>
                <td>{{ $data->discription }}</td>
                <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d-M-Y')  }}</td>
                <td>{{ \Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('product.edit', $data->id) }}" class=""><i class="fas fa-edit" style="font-size: 30px;"></i></a> |


                    {{ Form::open(['route' => ['product.update', $data->id], 'method'=>'delete']) }}
                    <button type="submit" class="btn btn-sm btn-danger" style="margin-top: -36px !important;
margin-left: 45px !important;"><i class="fas fa-trash-alt" ></i></button>
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
