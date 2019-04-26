@extends('layouts.master')

@section('title', '| Permissions')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1 style="margin-top: -32px;"><i class="fa fa-key"></i>Available Permissions

            <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Users</a>
            <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-primary"><i class="fas fa-edit" style="font-size: 10px"></i></a> |

                            {{ Form::open(['route' => ['permissions.destroy', $permission->id], 'method'=>'delete']) }}
                            <button type="submit" class="btn btn-sm btn-danger" style="margin-top: -78px !important;
margin-left: 76px !important;"><i class="fas fa-trash-alt" ></i></button>
                            {{ Form::close() }}
{{--                            <a href="{{ Route ('permissions.edit',$permission->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>--}}

{{--                            {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}--}}
{{--                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
{{--                            {!! Form::close() !!}--}}

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>

    </div>

@endsection
