@extends('layout')

@section('head')
    <title>POS4Shop - Home</title>
@stop

@section('body')
    <div class="row">
        @for ($i=0;$i<count($allProduct);$i++)
            <div class="col-md-2">
                <img src="upload/product/{{$allProduct[$i]->get('file')}}" class="img-responsive" alt="Image">
                {{$allProduct[$i]->get('name')}}
            </div>
        @endfor
    </div>

@stop