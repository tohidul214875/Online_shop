@extends('layouts.master')
@section('title', 'Customers Form')
@section('content_head', 'Customer create')
@section('content')




    {{ Form::open(['route' => 'customer.store', 'files'=>true]) }}
    {{--{!! Form::open(['action' => 'ProductController@store', 'files'=>true, 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}--}}


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('name', 'Customer Name') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('name','',['class'=>'form-control', 'placeholder'=>'customer name','required']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('number', 'customer Phone') }}
            </div>
            <div class="col-md-7">
                {{ Form::number('number','',['class'=>'form-control', 'placeholder'=>'customer phone number','required']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('address', 'Customer Address') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('address','',['class'=>'form-control', 'placeholder'=>'customer address']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('email', 'Customer Email') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('email','',['class'=>'form-control', 'placeholder'=>'customer email']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('discription', 'Customer Discription') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('discription','',['class'=>'form-control', 'placeholder'=>'customer discription']) }}
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
                {{ Form::submit('Save',['class'=>'btn btn-primary']) }}
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

