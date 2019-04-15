<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Description</th>
        <th>Start_date</th>
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
            <td>{{ $cate->start_date }}</td>
            <td>{{ $cate->salary }}</td>
            <td>{{ \Carbon\Carbon::parse($cate->created_at)->format('d-M-Y')  }}</td>
            <td>{{ \Carbon\Carbon::parse($cate->updated_at)->diffForHumans() }}</td>
            <td></td>
        </tr>
    @endforeach
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="    https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js
"></script>
<script src="    https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js
"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
