@extends('layouts.master')

@section('title', '| Roles')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1 style="margin-top: -32px;"><i class="fa fa-key"></i> Roles

            <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Users</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a>
            <a href="{{ route('roles.create') }}" class="btn btn-success">Add Role</a>
        </h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($roles as $role)
                    <tr>

                        <td>{{ $role->name }}</td>

                        <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                        <td>

                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary"><i class="fas fa-edit" style="font-size: 10px"></i></a> |

                            {{ Form::open(['route' => ['roles.destroy', $role->id], 'method'=>'delete']) }}
                            <button type="submit" class="btn btn-sm btn-danger" style="margin-top: -78px !important;
margin-left: 76px !important;"><i class="fas fa-trash-alt" ></i></button>
                            {{ Form::close() }}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>



    </div>

@endsection
