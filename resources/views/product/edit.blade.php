@extends('layouts.master')
@section('title', 'Products Form')
@section('content_head', 'Product create')
@section('content')




            {{ Form::open(['route' => ['product.update', $data->id], 'method'=>'put']) }}

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('name', 'Product Name') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('name',$data->name,['class'=>'form-control', 'placeholder'=>'product name','required']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('price', 'Product Price') }}
            </div>
            <div class="col-md-7">
                {{ Form::number('price',$data->price,['class'=>'form-control', 'placeholder'=>'product price','required']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('discription', 'Product Discription') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('discription',$data->discription,['class'=>'form-control', 'placeholder'=>'product discription']) }}
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
                {{ Form::label('offic', 'Offic Name') }}
            </div>
            <div class="col-md-7">
                {{ Form::text('offic',$data->offic,['class'=>'form-control', 'placeholder'=>'offic name','required']) }}
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

