<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="text-center"> Categories Form: </h1>
            {{ Form::open(['url' => ['product/update', $data->id]]) }}
            {{ Form::text('name',$data->name,['class'=>'form-control', 'placeholder'=>'Enter category name']) }}<br>
            {{ Form::text('position',$data->position,['class'=>'form-control', 'placeholder'=>'category position']) }}<br>
            {{ Form::text('office',$data->office,['class'=>'form-control', 'placeholder'=>'category office']) }}<br>
            {{ Form::text('description',$data->description,['class'=>'form-control', 'placeholder'=>'category description']) }}<br>
            {{ Form::date('photo',$data->photo,['class'=>'form-control', 'placeholder'=>'category Start date']) }}<br>
            {{ Form::text('salary',$data->salary,['class'=>'form-control', 'placeholder'=>'category salary']) }}<br>

            {{ Form::submit('update',['class'=>'btn btn-primary']) }}
            {{ Form::close() }}
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
        </div>
    </div>
</div>
</body>
</html>
