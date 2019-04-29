@extends('layouts.master')
@section('title', 'Customers Form')
@section('content_head', 'Customer create')
@section('content')




    {{ Form::open(['route' => 'category.store']) }}
    {{--{!! Form::open(['action' => 'ProductController@store', 'files'=>true, 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}--}}


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('name', 'Category Name') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('name','',['class'=>'form-control', 'placeholder'=>'category name','required']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('lable', 'Category Lable') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('lable','',['class'=>'form-control', 'placeholder'=>'category lable']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('discription', 'Category Discription') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('discription','',['class'=>'form-control', 'placeholder'=>'category discription']) }}
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

