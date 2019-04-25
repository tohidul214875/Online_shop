@extends('layouts.master')
@section('title', 'Customers Form')
@section('content_head', 'Customer create')
@section('content')




    {{ Form::open(['route' => ['customer.update', $data->id], 'method'=>'put']) }}

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('name', 'Customer Name') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('name',$data->name,['class'=>'form-control', 'placeholder'=>'Customer name','required']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('number', 'Customer Phone Number') }}
            </div>
            <div class="col-md-7">
                {{ Form::number('number',$data->number,['class'=>'form-control', 'placeholder'=>'customer phone number','required']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('address', 'Customer Address') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('address',$data->address,['class'=>'form-control', 'placeholder'=>'customer address']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('email', 'Customer Email') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('email',$data->email,['class'=>'form-control', 'placeholder'=>'customer email']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('discription', 'Customer Discription') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('discription',$data->discription,['class'=>'form-control', 'placeholder'=>'customer discription']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('photo', 'Product Photo') }}
            </div>
            <div class="col-md-7">
                {{ Form::file('photo',['class'=>'form-control']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-7">
                {{ Form::submit('Update',['class'=>'btn btn-primary']) }}
            </div>
        </div>
    </div>
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
@endsection

