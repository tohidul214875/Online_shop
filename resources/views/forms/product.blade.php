    @extends('layouts.master')
    @section('title', 'Categories Form')
    @section('content_head')
    @section('content')




                {{ Form::open(['url' => 'product/store']) }}
                {{ Form::Select('category_id',$categories,null,['class'=>'form-control', 'placeholder'=>'Enter category name']) }}<br>
                {{ Form::text('name','',['class'=>'form-control', 'placeholder'=>'Enter Poroduct name']) }}<br>
                 @if($errors->has('name'))
                     <p class="alert alert-danger">
                        {{ $errors->first('name') }}
                    </p>
                     @endif
                {{ Form::text('position','',['class'=>'form-control', 'placeholder'=>'category position']) }}<br>
                @if($errors->has('position'))
                    <p class="alert alert-danger">
                        {{ $errors->first('position') }}
                    </p>
                @endif
                {{ Form::text('office','',['class'=>'form-control', 'placeholder'=>'category office']) }}<br>
                @if($errors->has('office'))
                    <p class="alert alert-danger">
                        {{ $errors->first('office') }}
                    </p>
                @endif
                {{ Form::text('description','',['class'=>'form-control', 'placeholder'=>'category description']) }}<br>
                @if($errors->has('description'))
                    <p class="alert alert-danger">
                        {{ $errors->first('description') }}
                    </p>
                @endif
                {{ Form::file('photo','',['class'=>'form-control', 'placeholder'=>'category photo']) }}<br>
                @if($errors->has('start_date'))
                    <p class="alert alert-danger">
                        {{ $errors->first('start_date') }}
                    </p>
                @endif
                {{ Form::number('salary','',['class'=>'form-control', 'placeholder'=>'category salary']) }}<br>
                @if($errors->has('salary'))
                    <p class="alert alert-danger">
                        {{ $errors->first('salary') }}
                    </p>
                @endif

                {{ Form::submit('Save',['class'=>'btn btn-primary']) }}
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

