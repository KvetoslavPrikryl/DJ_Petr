@extends('layouts.app')

@section('content')

@if($create)
    {{Form::open(['route' =>''])}}
@else
    [[Form::model($ ,['route' => [], 'method' => 'PUT'])]]
@endif

@endsection