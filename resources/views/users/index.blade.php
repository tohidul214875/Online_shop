@extends('layouts.master')

@section('title', '| Users')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1 style="margin-top: -32px;"><i class="fa fa-users"></i> User Administration <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a>
            <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>
        </h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th>User Roles</th>
                    <th>Operations</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($users as $user)
                    <tr>

                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                        <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                        <td>

                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary"><i class="fas fa-edit" style="font-size: 10px"></i></a> |

                            {{ Form::open(['route' => ['users.destroy', $user->id], 'method'=>'delete']) }}
                            <button type="submit" class="btn btn-sm btn-danger" style="margin-top: -78px !important;
margin-left: 76px !important;"><i class="fas fa-trash-alt" ></i></button>
                            {{ Form::close() }}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

{{--        <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>--}}

    </div>

@endsection
