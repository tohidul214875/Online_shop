@extends('layouts.master')
@section('title', 'Categories Form')
@section('content_head')
@section('content')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Description</th>
        <th>Photo</th>
        <th>Salary</th>
        <th>Added_at</th>
        <th>Updded_at</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($category as $cate)
        <tr>
            <td>{{ $cate->id }}</td>
            <td>{{ $cate->name }}</td>
            <td>{{ $cate->position }}</td>
            <td>{{ $cate->office }}</td>
            <td>{{ $cate->description }}</td>
            <td>{{ $cate->photo }}</td>
            <td>{{ $cate->salary }}</td>
            <td>{{ \Carbon\Carbon::parse($cate->created_at)->format('d-M-Y')  }}</td>
            <td>{{ \Carbon\Carbon::parse($cate->updated_at)->diffForHumans() }}</td>
            <td>
                <a href="{{ url('products/edit', $cate->id) }}" class="btn-primary"><i class="fas fa-edit"></i></a> |<a href="{{ url('product/delete', $cate->id) }}" class="btn-danger"><i class="far fa-trash-alt"></i></a>
            </td>
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
